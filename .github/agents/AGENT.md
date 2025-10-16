# Agents Folder Contract

This directory houses specialised agent persona documents that extend the global contract in `../../AGENTS.md`.

The goal: Provide narrowly‑scoped, high‑signal behavioural overlays for recurring WordPress and documentation quality domains (theme tokens, accessibility, security, performance, internationalisation), without duplicating global rules.

## Usage

Pick ONE persona when seeking focused review or guidance. Combine only if their scopes do not overlap materially. If unsure, start with the most specific domain (e.g., `accessibility-auditor`) then escalate.

## Authoring Rules

1. Keep each persona file under ~140 lines.
2. Do not restate global principles (security, performance guardrails, etc.) – reference them.
3. Use UK English spelling for new text (see forthcoming language style guide once added).
4. Prefer action verbs in Responsibilities & Common Tasks.
5. Anti‑patterns MUST be concrete (e.g., “Adding ARIA roles to native elements unnecessarily”).
6. Escalation criteria required: when human review or other persona hand‑off is needed.

## Standard Persona Structure

```
# <Title>
Purpose
When to Use
Inputs Expected
Responsibilities
Quality Focus
Common Tasks
Anti-Patterns
Escalation / Hand-off
Interactions
```

## Complete Agent Library

### JavaScript Automation Agents (Executable)
- `bats-tests-runner-agent.js` - Test automation specialist for Bats testing coverage
- `issue-type-agent.js` - Automatic issue type analysis and GitHub Projects integration
- `label-standardization-agent.js` - Label standardization and migration automation
- `labeling-agent.js` - Intelligent issue and PR labeling based on content analysis
- `linting-workflow-agent.js` - Code quality enforcement across multiple languages
- `release-agent.js` - Release management and version automation
- `script-header-docs-agent.js` - Shell script documentation validation and quality

### Markdown Specification Agents (Expert Guidance)
- `accessibility-auditor.agents.md` - Comprehensive accessibility auditing and WCAG compliance
- `block-patterns-planner.agents.md` - Block pattern strategy and library planning
- `block-theme-optimizer.agents.md` - WordPress block theme performance optimization
- `i18n-l10n-reviewer.agents.md` - Internationalization and localization review
- `performance-profiler.agents.md` - Performance analysis and optimization profiling
- `pr-reviewer.agents.md` - Pull request review automation and quality assessment
- `qa-test-architect.agents.md` - Quality assurance strategy and testing architecture
- `release-notes-manager.agents.md` - Release notes generation and management
- `security-hardening-reviewer.agents.md` - Security hardening and vulnerability assessment
- `woocommerce-specialist.agents.md` - WooCommerce development and e-commerce expertise
- `wordpress-a11y-specialist.agents.md` - WordPress accessibility specialization
- `wordpress-block-theme-architect.agents.md` - Block theme architecture and development strategy

### Supporting Documentation
- `AGENT.md` - This file: Agent development contract and guidelines
- `README.md` - Comprehensive agent directory overview and usage patterns
- `TEMPLATE.agents.md` - Standardized template for creating new agent specifications

## Tagging (Deferred)

Do not add frontmatter yet; a repository‑wide tagging schema will be introduced later—personas will gain tag metadata at that time.

## Change Process

1. Propose new persona or adjustment via PR referencing gaps vs existing scopes.
2. Update this index list and append CHANGELOG entry summarising rationale.
3. Run lint script (`npm run build` currently covers docs regeneration; future linter will validate persona headings).

---

Maintainers: keep this lean. If this file starts to expand with policy text, extract that policy to `docs/` and link.
