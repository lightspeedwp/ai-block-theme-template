# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
### Changed
### Deprecated
### Removed
### Fixed
### Security

---

## [0.2.0] - 2025-10-10

> Release PR: [#9](https://github.com/lightspeedwp/ai-block-theme-template/pull/9)

### Added

- Introduced automated workflows for release management and changelog updates.
- Enhanced GitHub Actions for issue and PR labeling, project synchronization, and default issue type assignment.
- Standardised **design token system** (semantic colour palette: `base`, `contrast`, `primary`, `neutral-*`, `accent-*`).
- Numeric **fluid typography scale** (`font-size-100` → `font-size-900`) with explicit min/max clamp bounds to prevent hierarchy inversion.
- Expanded **fluid spacing scale** (`spacing-10` → `spacing-100`) using progressive clamp ratios.
- New **section style variations**:  
  `section-base`, `section-contrast`, `section-soft`, `section-accent-primary`, `section-accent-warm`,  
  `section-hero-light`, `section-hero-dark`, `section-cta`, `section-cards`, `section-muted`.
- Additional **template part registrations** in `theme.json` (menu, hero, breadcrumbs, post-meta, author-card, share-actions, mobile panels, etc.).
- **Pattern stubs** (heroes, queries, post/author cards, menu panels, share actions, post meta).
- **Migration scripts** (`migrate-patterns.sh`, `migrate-patterns.php`) to reorganize patterns and normalise headers & slugs.
- **Naming Scheme Implementation Report** (`docs/naming-scheme-implementation-report.md`) documenting rationale, governance, QA results.
- Block pattern category & template part area registrations (`pattern-categories-and-template-part-areas.php`).
- Fluid-aware section style JSON partials using only preset tokens (no raw hex values).

### Changed in v0.3.0

- Updated `.gitignore` to ensure proper exclusion of `/tests`, `/vendor`, and `/node_modules` directories.
- Refined `.gitattributes` for consistent file handling across platforms.
- Replaced legacy spacing slug references (e.g. `var:preset|spacing|50`) with new `var:preset|spacing|spacing-50` schema across patterns and parts.
- Updated `theme.json`:
  - Introduced semantic + scale-based palette; removed ad‑hoc colour identifiers.
  - Replaced prior font size presets with numeric fluid scale.
  - Converted all pattern / section padding & gaps to spacing tokens (removed hard-coded px except inside clamp definitions).
- Normalised pattern headers into canonical `lsx-design/*` namespace with Block Types & Categories.
- Refactored hero & CTA patterns to use upper-tier fluid spacing tokens and high-tier font sizes.

### Fixed in v0.3.0

- Resolved issues with `.gitattributes` misinterpreting comments as invalid attribute names.
- Prevented **typographic hierarchy drift** at extreme viewports by enforcing explicit min/max clamp bounds per font size.
- Unified spacing approach reduced risk of inconsistent vertical rhythm across patterns.

### Security in v0.3.0

- No security-related changes in this version.

----

> Release PR: [#8](https://github.com/lightspeedwp/ai-block-theme-template/pull/8)

### Added
- Standardised **design token system** (semantic colour palette: `base`, `contrast`, `primary`, `neutral-*`, `accent-*`).
- Numeric **fluid typography scale** (`font-size-100` → `font-size-900`) with explicit min/max clamp bounds to prevent hierarchy inversion.
- Expanded **fluid spacing scale** (`spacing-10` → `spacing-100`) using progressive clamp ratios.
- New **section style variations**:  
  `section-base`, `section-contrast`, `section-soft`, `section-accent-primary`, `section-accent-warm`,  
  `section-hero-light`, `section-hero-dark`, `section-cta`, `section-cards`, `section-muted`.
- Additional **template part registrations** in `theme.json` (menu, hero, breadcrumbs, post-meta, author-card, share-actions, mobile panels, etc.).
- **Pattern stubs** (heroes, queries, post/author cards, menu panels, share actions, post meta).
- **Migration scripts** (`migrate-patterns.sh`, `migrate-patterns.php`) to reorganize patterns and normalise headers & slugs.
- **Naming Scheme Implementation Report** (`docs/naming-scheme-implementation-report.md`) documenting rationale, governance, QA results.
- Block pattern category & template part area registrations (`pattern-categories-and-template-part-areas.php`).
- Fluid-aware section style JSON partials using only preset tokens (no raw hex values).

### Changed
- Replaced legacy spacing slug references (e.g. `var:preset|spacing|50`) with new `var:preset|spacing|spacing-50` schema across patterns and parts.
- Updated `theme.json`:
  - Introduced semantic + scale-based palette; removed ad‑hoc colour identifiers.
  - Replaced prior font size presets with numeric fluid scale.
  - Converted all pattern / section padding & gaps to spacing tokens (removed hard-coded px except inside clamp definitions).
- Normalised pattern headers into canonical `lsx-design/*` namespace with Block Types & Categories.
- Refactored hero & CTA patterns to use upper-tier fluid spacing tokens and high-tier font sizes.

### Deprecated
- *(None.)*  
  *Note:* If legacy aliases for spacing or font sizes are later reintroduced for backwards compatibility, list them here.

### Removed
- Implicit / undocumented spacing slugs (`30`, `40`, etc.) superseded by explicit `spacing-XX`.
- Inline hex colour references (white/black) where semantic tokens now exist.

### Fixed
- Prevented **typographic hierarchy drift** at extreme viewports by enforcing explicit min/max clamp bounds per font size.
- Unified spacing approach reduced risk of inconsistent vertical rhythm across patterns.

### Security
- No security-related changes in this version.

---

## Links

- `[Unreleased]` compare: [Compare v0.3.0...HEAD](https://github.com/lightspeedwp/ai-block-theme-template/compare/v0.3.0...HEAD)
- `[0.3.0]` diff: [Compare v0.2.0...v0.3.0](https://github.com/lightspeedwp/ai-block-theme-template/compare/v0.2.0...v0.3.0)
- Release PR: [#9](https://github.com/lightspeedwp/ai-block-theme-template/pull/9)

---

## [0.1.0] - 2025-09-26

🎉 **Initial Release** - AI-Enhanced WordPress Block Theme Template

This initial release provides a complete foundation for modern WordPress block theme development enhanced with AI tools, comprehensive testing, and industry best practices. (Full details retained from original entry.)

---

## Links

- `[Unreleased]` compare: https://github.com/lightspeedwp/ai-block-theme-template/compare/v0.2.0...HEAD
- `[0.2.0]` diff: https://github.com/lightspeedwp/ai-block-theme-template/compare/v0.1.0...v0.2.0
- Release PR: https://github.com/lightspeedwp/ai-block-theme-template/pull/8
