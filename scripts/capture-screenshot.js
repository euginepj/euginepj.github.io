const { chromium } = require('playwright');
const path = require('path');
const fs = require('fs');

// Helper script to extract project screenshots matching portfolio standards
// Usage: node scripts/capture-screenshot.js --url=https://example.com --name=example

function parseArgs() {
  const args = {};
  process.argv.slice(2).forEach(arg => {
    if (arg.startsWith('--')) {
      const [key, ...val] = arg.slice(2).split('=');
      args[key] = val.join('=');
    }
  });
  return args;
}

async function capture() {
  const args = parseArgs();
  const url = args.url;
  const name = args.name;

  if (!url || !name) {
    console.error('Error: Please provide both --url and --name arguments.');
    console.log('Example: node scripts/capture-screenshot.js --url=https://example.com --name=example-site');
    process.exit(1);
  }

  const outputDir = path.resolve(__dirname, '../images');
  if (!fs.existsSync(outputDir)) {
    fs.mkdirSync(outputDir, { recursive: true });
  }

  const fullPath = path.join(outputDir, `img-${name}.png`);
  const smPath = path.join(outputDir, `sm-img-${name}.png`);

  console.log(`[Screenshot Tool] Starting extraction for: ${url}`);
  console.log(`[Screenshot Tool] Saving to ${fullPath} & ${smPath}`);

  const browser = await chromium.launch({ headless: true });

  try {
    // 1. Capture Full Page Screenshot (1903px viewport width)
    const context = await browser.newContext({
      viewport: { width: 1903, height: 1080 },
      deviceScaleFactor: 1
    });
    const page = await context.newPage();
    console.log(`Navigating to ${url}...`);
    await page.goto(url, { waitUntil: 'networkidle', timeout: 45000 });
    await page.waitForTimeout(3000);

    console.log('Capturing full page screenshot...');
    await page.screenshot({ path: fullPath, fullPage: true });

    // 2. Capture Hero Preview Thumbnail (1903px x 2020px clip)
    const smContext = await browser.newContext({
      viewport: { width: 1903, height: 2020 },
      deviceScaleFactor: 1
    });
    const smPage = await smContext.newPage();
    await smPage.goto(url, { waitUntil: 'networkidle', timeout: 45000 });
    await smPage.waitForTimeout(2000);

    console.log('Capturing hero preview thumbnail...');
    await smPage.screenshot({ path: smPath, clip: { x: 0, y: 0, width: 1903, height: 2020 } });

    console.log(`[SUCCESS] Screenshots saved successfully for ${name}!`);
  } catch (err) {
    console.error(`[ERROR] Failed to capture screenshots for ${url}:`, err.message);
    process.exitCode = 1;
  } finally {
    await browser.close();
  }
}

capture();
