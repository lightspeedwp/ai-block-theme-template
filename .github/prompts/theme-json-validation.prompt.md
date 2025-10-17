**Purpose**: Run full validation for a WordPress block theme using the **trunk** theme.json schema, including all style variations.

**What I’ll provide (user input)**
- Theme root path (default: current directory).
- Optional custom globs (default: `theme.json`, `styles/**/*.json`).
- Mode: `propose` (only suggest patches) or `fix` (write minimal patches).
- Optional project rules: reserved slug prefixes, target scale ratio, preset groups to enforce.

**What you should return**
- **Bullet summary** of issues (schema vs semantic) and quick wins.
- **Machine‑readable** error list (`file`, `jsonPath`, `message`, `suggestion`).
- **Minimal patch snippets** (or JSON Patch array) per error.
- **CI command block** for a local/CI run (Node + ajv‑cli).

**First message example**
> Validate `./theme.json` and `./styles/**/*.json` against **https://schemas.wp.org/trunk/theme.json**. Report schema errors and propose minimal fixes. Produce `report.md` and `errors.json` under `./reports/theme-json/`.
