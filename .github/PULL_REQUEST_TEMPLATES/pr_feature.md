---
name: Feature / Implementation PR
about: New capability or significant enhancement (product) — or implementation Story/Task (client).
title: "feat: "
labels: ["status:needs-review"]
---

<!--
Aligns with Product “Feature PR” and Client “Implementation PR” checklists.
Keep PRs small; link a Project item; CI must be green before review.
-->

## Summary
What’s changing and why? Link the Project item (Story/Task/Epic).

- Closes #
- Project item: #  <!-- required: keeps status automation in sync -->

## Acceptance criteria
Restate the AC or add a brief checklist.

- [ ] …

## Screenshots / GIFs
(UI changes only)

## Test plan
What to test and how:
- Unit/functional tests added or updated
- Manual checks

## Environment / UAT notes
- Where to verify: Prototype/Staging/Live
- Feature flags (if any)

## Docs & changelog
- [ ] Docs/README updated (if applicable)
- [ ] Changelog updated (or `meta:no-changelog` if internal-only)

## Risks & rollout
- Risk notes:
- Rollout/rollback steps:

## Checklist
- [ ] CI green
- [ ] 1–2 reviewers requested (design review if UI touched)
- [ ] Linked Project item and Issue Type set
