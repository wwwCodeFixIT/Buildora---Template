# Buildora — 100% online workflow

Buildora is prepared for browser-only development: GitHub stores the source, Codespaces provides the IDE/build environment, and WordPress Playground provides WordPress + Site Editor.

## 1. Create the GitHub repository

Create a **public** repository, for example `wwwCodeFixIT/Buildora---Template`, and push this project to it.

Public access is required for direct Playground loading and PR previews because Playground must be able to fetch the theme or preview artifact without your GitHub session.

## 2. Open GitHub Codespaces

In GitHub choose **Code → Codespaces → Create codespace on main**.

`.devcontainer/devcontainer.json` provisions:

- Node.js 22
- PHP 8.3
- GitHub CLI
- ESLint + Prettier extensions
- PHP Intelephense
- dependencies installed automatically with `npm install`

Useful commands:

```bash
npm run check
npm run build
npm run package
```

`npm run package` builds the Vite assets and creates `build/buildora.zip` with a proper `buildora/` top-level theme folder.

## 3. Configure WordPress Playground once

In Codespaces run:

```bash
npm run configure:cloud -- wwwCodeFixIT/Buildora---Template
```

The command:

1. updates the GitHub repository URL in both Blueprints;
2. writes `playground/LINKS.md`;
3. prints one-click **Demo** and **Development** Playground URLs.

Commit and push those generated changes if they differ.

## 4. Develop WordPress in the browser

Open the **Development** URL from `playground/LINKS.md`.

It launches:

- latest WordPress;
- PHP 8.3;
- Buildora installed from the `main` branch and activated;
- Create Block Theme installed and activated;
- Site Editor as the initial screen.

Changes made in Site Editor are user-level database customizations. Before exporting them back to GitHub, use **Create Block Theme → Save Changes to Theme** so templates/styles are written into the theme files.

## 5. Pull Request previews

Buildora has a Vite asset pipeline, so PR previews use the official two-workflow build/publish pattern:

```text
Pull Request
    ↓
npm install
    ↓
npm run package
    ↓
build/buildora.zip
    ↓
public preview artifact
    ↓
Preview in WordPress Playground button
```

Files:

- `.github/workflows/pr-preview-build.yml`
- `.github/workflows/pr-preview-publish.yml`

The build workflow has read-only permissions. The publish workflow runs separately with the write permissions required to publish the safe artifact and update the PR.

## 6. Cloudflare

Cloudflare Pages is not used as the PHP/WordPress runtime.

When the Buildora demo content is ready, Cloudflare can host the public static marketing/demo layer. Until then, Playground is the fastest zero-server preview environment.

## Architecture

```text
                         ┌─────────────────────────┐
                         │        GitHub           │
                         │   source of truth       │
                         └────────────┬────────────┘
                                      │
                   ┌──────────────────┼──────────────────┐
                   │                  │                  │
                   ▼                  ▼                  ▼
          GitHub Codespaces     Pull Requests      WP Playground
          code / Vite / PHP      CI + preview      Site Editor
                   │                  │                  │
                   └──────────────────┴──────────────────┘
                                      │
                                      ▼
                               Buildora theme
```
