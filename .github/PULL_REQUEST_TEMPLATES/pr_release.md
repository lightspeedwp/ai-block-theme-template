---
name: Release PR
about: Promote a release branch (product) or a tested batch from Staging to Live (client).
title: "release: v"
labels: ["status:needs-review"]
---

<!--
Aligns with Product “Release PR” and Client “Release PR” checklists.
Include version bump, changelog, smoke‑test matrix, UAT evidence (client).
-->

## Scope
This release includes the following merged PRs / issues:
- #

## Version & tagging
- Target version/tag: vX.Y.Z
- [ ] Version bumped where required

## Changelog
Link to or paste the release‑notes section for vX.Y.Z.

## UAT / QA evidence
- UAT sign‑off (link): 
- Smoke‑test matrix (key flows):
  - [ ] Auth / checkout / settings
  - [ ] …

## Migration notes
Data/SEO/config/cache/CDN steps.

## Monitoring & rollback
What to watch post‑deploy and how to revert if needed.

## After merge
- [ ] Tag vX.Y.Z on `main`
- [ ] Publish release notes
- [ ] Back‑merge `main → develop` (if using develop)
