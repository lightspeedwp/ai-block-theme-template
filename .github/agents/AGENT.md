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

## Initial Persona Set

- `block-theme-optimizer.agent.md`
- `accessibility-auditor.agent.md`
- `security-hardening-reviewer.agent.md`
- `performance-profiler.agent.md`
- `i18n-l10n-reviewer.agent.md`

(Planned / later) REST API contract validator, testing strategy advisor, design token curator (may merge with optimiser if scope stays small).

## Tagging (Deferred)

Do not add frontmatter yet; a repository‑wide tagging schema will be introduced later—personas will gain tag metadata at that time.

## Change Process

1. Propose new persona or adjustment via PR referencing gaps vs existing scopes.
2. Update this index list and append CHANGELOG entry summarising rationale.
3. Run lint script (`npm run build` currently covers docs regeneration; future linter will validate persona headings).

---

Maintainers: keep this lean. If this file starts to expand with policy text, extract that policy to `docs/` and link.
