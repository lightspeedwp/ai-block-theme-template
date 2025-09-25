# 🤖 WordPress-Focused Agents

Specialized GitHub Copilot agents designed for WordPress development workflows, each focusing on specific domains like accessibility, performance, security, and block/theme development.
### How to Use WordPress Agents

**To Reference:**
- Each agent defines specialized behavior for WordPress development domains
- Agents complement the global behavioral contract defined in [`AGENTS.md`](../../AGENTS.md)
- Use agents as reference for specialized WordPress workflows and best practices

**To Create New Agents:**
- Copy the [`TEMPLATE.agent.md`](TEMPLATE.agent.md) file to create new specialized agents
- Follow the WordPress-focused guidelines and YAML frontmatter structure
- Ensure new agents align with WordPress coding standards and security practices

| Agent | Domain | Description |
| ----- | ------ | ----------- |
| [Accessibility Auditor](accessibility-auditor.agent.md) | accessibility | WordPress accessibility specialist ensuring WCAG 2.2 AA compliance through comprehensive auditing, testing, and remediation of themes, plugins, and content |
| [Block Theme Optimizer](block-theme-optimizer.agent.md) | block-themes | WordPress block theme specialist optimizing theme.json, design tokens, patterns, and templates for performance, maintainability, and design system coherence |
| [Internationalisation & Localisation Reviewer](i18n-l10n-reviewer.agent.md) | wp-core | Ensure all user‑facing strings and interfaces are translation‑ready, context‑clear, and localisation friendly |
| [Performance Profiler](performance-profiler.agent.md) | performance | WordPress performance specialist optimizing Core Web Vitals through comprehensive analysis of themes, plugins, and database queries |
| [Security Hardening Reviewer](security-hardening-reviewer.agent.md) | security | WordPress security specialist ensuring OWASP compliance through code review, vulnerability assessment, and security best practice implementation |
| [WooCommerce E-commerce Specialist](woocommerce-specialist.agent.md) | wp-core | WordPress WooCommerce E-commerce Specialist - Expert in WooCommerce block development, checkout optimization, and performance tuning |
| [WordPress Block & Theme Development Architect](wordpress-block-theme-architect.agent.md) | block-theme | Comprehensive WordPress Block & Theme Development Architect - Specializes in FSE themes, block development, design systems, and theme.json architecture |
