# euginepj.github.io

> Personal portfolio and resume website for **Eugine Joseph** — Full Stack Developer.

🌐 **Live site:** [euginepj.github.io](https://euginepj.github.io)

---

## About

A handcrafted portfolio site showcasing full-stack development work, skills, and project history. Built as a static GitHub Pages deployment compiled from a PHP template, styled with Tailwind CSS v4, and animated with GSAP.

---

## Tech Stack

### Build Tools
| Tool | Purpose |
|---|---|
| [Tailwind CSS v4](https://tailwindcss.com) | Utility-first CSS framework |
| [PostCSS](https://postcss.org) | CSS transformation pipeline |
| [Prettier](https://prettier.io) | HTML/CSS code formatting |
| PHP (XAMPP) | Template engine — `index.php` compiles to `index.html` |

### Runtime (CDN — loaded in browser)
| Library | Version | Purpose |
|---|---|---|
| [jQuery](https://jquery.com) | 3.7.1 | DOM & event handling |
| [GSAP](https://gsap.com) | 3.12.5 | Scroll-triggered animations |
| [FancyBox](https://fancyapps.com/fancybox/) | 5.0 | Image lightbox |
| [Font Awesome](https://fontawesome.com) | 6.4.0 | Icon library |
| [DevIcon](https://devicon.dev) | 2.15.1 | Tech stack icons |

### DevOps
- **GitHub Pages** — static hosting via `actions/deploy-pages`
- **GitHub Actions** — auto-deploy on push to `main`

---

## Local Development

### Prerequisites
- [Node.js](https://nodejs.org) >= 20
- [XAMPP](https://www.apachefriends.org/) or any PHP 8.x runtime

### Setup

```bash
git clone https://github.com/euginepj/euginepj.github.io.git
cd euginepj.github.io
npm install
```

### Scripts

| Command | Description |
|---|---|
| `npm run build` | Compile Tailwind CSS (`css/input.css` -> `css/output.css`) |
| `npm run watch` | Watch and recompile CSS on changes |
| `npm run build:html` | Render `index.php` -> `index.html` and format with Prettier |
| `npm run format` | Format all HTML files with Prettier |
| `npm run capture` | Take a screenshot of the site (via Playwright) |

### Typical workflow

```bash
# 1. Edit index.php (source template)
# 2. Watch CSS changes
npm run watch

# 3. When ready to publish, compile to static HTML
npm run build:html

# 4. Commit & push — GitHub Actions deploys automatically
git add -A && git commit -m "feat: ..." && git push origin main
```

---

## Project Structure

```
euginepj.github.io/
├── index.php              # PHP template (source of truth)
├── index.html             # Compiled static output (deployed to GitHub Pages)
├── css/
│   ├── input.css          # Tailwind source
│   └── output.css         # Compiled CSS (generated — do not edit manually)
├── images/                # Project screenshots & assets
├── video-bg/              # Background video assets
├── scripts/
│   └── capture-screenshot.js  # Playwright screenshot utility
├── fcw-market-ug/         # Sub-project: Falconcity Markets demo site
├── .github/
│   └── workflows/
│       └── static.yml     # GitHub Pages deploy workflow
├── package.json           # npm dependencies & scripts
└── tailwind.config.js     # Tailwind configuration
```

---

## Security

- All runtime JavaScript libraries are loaded from trusted CDNs with **Subresource Integrity (SRI)** hashes where available.
- `node_modules/` is gitignored — no dependency files are committed to the repository.
- `npm audit` reports **0 vulnerabilities** across all packages.
- Dependabot alerts are monitored and addressed on an ongoing basis.

---

## Deployment

Deployment is fully automated via GitHub Actions ([`.github/workflows/static.yml`](.github/workflows/static.yml)):

1. Push to `main` branch
2. Action checks out the repo
3. Uploads the repository as a Pages artifact
4. Deploys to `https://euginepj.github.io`

> **Note:** `index.html` must be rebuilt locally (`npm run build:html`) before pushing if `index.php` was modified.

---

## License

© Eugine Joseph. All rights reserved.
