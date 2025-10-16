---
applyTo: '**'
description: 'Instruction Authoring Standards for LightSpeed WP Copilot, prompts, chatmodes, and agents. Includes frontmatter, structure, review, and integration requirements.'
version: '0.1.0'
author: 'LightSpeed WP Team'
audience: ['contributor', 'maintainer', 'reviewer', 'automation']
status: 'approved'
changelog: ['2025-10-15: Initial version', '2025-10-15: Added versioning, audience, status, changelog, deprecation, tags, validation, feedback, lifecycle, automation, security, localization, accessibility, conflict, impact fields']
tags: ['standards', 'automation', 'copilot', 'review', 'prompt', 'chatmode', 'agent']
feedback: 'Submit suggestions or issues via repository discussions or PR comments.'
deprecated: false
related: ['custom-instructions.md', 'AGENTS.md', 'prompts.md', 'chatmodes.md']
lifecycle: ['draft', 'review', 'approved', 'deprecated']
status: 'approved'
changelog: ['2025-10-15: Initial version', '2025-10-15: Added versioning, audience, status, changelog, deprecation, tags, validation, feedback, lifecycle, automation, security, localization, accessibility, conflict, impact fields']
updated: '2025-10-15'
created: '2025-10-15'
documentation: 'Comprehensive authoring, governance, and review standards for all instruction files.'
governance: 'Instruction files must be reviewed for clarity, completeness, and compliance with org-wide standards.'
contact: 'LightSpeed WP Team <support@lightspeedwp.agency>'
permissions: 'Contributors, maintainers, and automation agents may update this file.'
license: 'GPL v3 or later'
copyright: 'LightSpeed WP Team'
impact: 'Ensures maintainable, actionable, and reviewable instructions for all contributors.'
security: 'Instructions must not introduce unsafe practices or unsupported tools.'
localization: 'See localization guidelines for markdown documents.'
accessibility: 'Documentation must be accessible and use inclusive language.'
conflict: 'Resolve conflicting instructions by merging and clarifying, never deleting.'
validation: 'All instruction files must respect ALL markdown linting rules.'
---

# Instruction Authoring Standards

You are an instruction author. Follow our LightSpeed WP instruction framework and best practices to create and maintain contributor guidance, standards, and automation instructions. Avoid ambiguity, duplication, missing context, unsupported tools, or markdown lint violations unless specified. All instruction files must respect ALL markdown linting rules.

---

## How to Create New Instruction Files

When creating a new instruction file:
1. **Start with the YAML frontmatter block** at the top of the file, including all required metadata fields.
2. **Add the heading one (`# ...`)** immediately after the frontmatter block and an empty line.
3. **Write the intro paragraph** immediately after the heading one and an empty line, following the required format.
4. **Fill in all required sections** below, using consistent markdown heading levels and formatting, after before and every heading there should be an empty line.
5. **Include examples and references** to related files using relative links.
6. **Complete the review checklist** below to ensure clarity, completeness, and compliance.
7. **All instruction files must respect ALL markdown linting rules.**
8. **Each new instruction file should refer back to the main instructions [.github/custom-instructions.md](../custom-instructions.md).**

## How to Merge Existing Content

When updating or refactoring instruction files:
1. **YAML frontmatter block:**
  - Begins with `---` on its own line
  - Validate that the frontmatter is present, complete, and unbroken at the top of the file, and that the heading and intro follow the required format and spacing
  - Contains all required and governance fields
  - Ends with `---` on its own line
2. **Heading One (`# ...`)**
  - Placed immediately after the frontmatter block and empty line
  - Followed by one empty line
3. **Intro Paragraph:**
  - Format: `You are a [role]. Follow our [framework/patterns] to [type of task]. Avoid [practices or tools] unless specified.`
  - Placed immediately after the heading one and empty line
  - Followed by one empty line
4. **Carefully merge all existing content into the new recommended sections.**
  - Do not delete, overwrite, or lose any original material.
  - Reorganize content to fit the standard structure below.
  - Expand or clarify sections as needed, but preserve all substantive information.
5. **Complete the review checklist below for every update.**
6. **Always validate that the frontmatter is present, complete, and unbroken at the top of the file, and that the heading and intro follow the required format and spacing.**
7. **All instruction files must respect ALL markdown linting rules.**
8. **Update `.github/custom-instructions.md` to reference the new or updated instruction file.**
9. **All instruction files must respect ALL markdown linting rules.**
10. **If the instruction file relates to copilot, prompts, chatmodes, or agents, update `prompts.md`, `chatmodes.md`, or `AGENTS.md` as relevant.**

---

## Critical Review & Recommendations

This file meets most requirements for instruction authoring standards, but the following improvements are recommended:

1. **Frontmatter Consistency**: Ensure all instruction files use the same YAML frontmatter fields and order. Add missing fields if required by governance.
2. **Section Headers**: Use consistent markdown heading levels (avoid skipping levels, e.g., H2 to H4).
3. **Examples and References**: Expand the examples section with more real-world templates and incorrect patterns for clarity.
4. **File References**: Remove or update links to files that do not exist (e.g., `shell-script-header-and-docs.md`, `shell-script-copilot.md`) to avoid lint errors.
6. **Validation Steps**: Include a sample validation checklist for contributors to follow before submitting instruction files.
7. **Conflict Resolution**: Add a section describing how to resolve conflicting instructions or merge disputes.
8. **Changelog Management**: Clarify how to update the changelog field and track changes for audit purposes.
9. **Automation Integration**: Add explicit instructions for integrating with CI/CD and review bots.
10. **Localization**: Reference localization guidelines for markdown documents if applicable.
11. **Security Considerations**: Include a section on ensuring instructions do not introduce unsafe practices or unsupported tools.
12. **Accessibility**: Add guidelines for ensuring documentation is accessible and uses inclusive language.
13. **Impact Statement**: Include a brief statement on the impact of the instruction file on workflows and automation.

---

## Core Principles

- **Actionability**: Instructions must be immediately usable by contributors or automation agents.
- **Consistency**: Follow a standard structure and formatting for all instruction files.
- **Context**: Reference related standards, documentation, and examples.
- **Enforceability**: Instructions should be testable, reviewable, and enforceable via automation or code review.
- **Integration**: Always update `.github/custom-instructions.md` and cross-reference related files.
- **Extensibility**: Add agent, prompt, or chatmode files if required by the new instructions.
- **Traceability**: Document all changes and references for maintainability.
- **Clarity**: Use clear, concise language and avoid ambiguity.
- **Completeness**: Cover all necessary aspects of the task or standard.
- **Reviewability**: Ensure instructions can be reviewed for compliance and effectiveness.
- **Maintainability**: Instructions should be easy to update and adapt over time.
- **Governance**: Follow organizational policies for documentation and standards.

---

## Required Sections

1. **Frontmatter**
   - YAML block at the top of the file with metadata fields (see below)
2. **Opening Paragraph**
   - Format: `You are a [role]. Follow our [framework/patterns] to [type of task]. Avoid [practices or tools] unless specified.`
3. **Purpose and Scope**
   - Briefly describe what the instruction covers and who should use it.
4. **Core Principles**
   - List the key principles for effective instructions (clarity, actionability, etc.).
5. **Role Definition and Context**
6. **Framework or Standards to Follow**
7. **Task Types and Scenarios**
8. **Anti-patterns and Explicit Exclusions**
9. **Examples and References**
    - Use markdown headings and bullet lists for readability.
    - Include code blocks for templates and examples.
    - Reference related files using relative links.
11. **Integration References**
    - Reference `.github/custom-instructions.md` and any related agent, prompt, or chatmode files
12. **Review and Enforcement**
    - Checklist for clarity, completeness, and compliance
---

## Frontmatter Guidelines

All instruction, prompt, chatmode, and agent files must begin with a YAML frontmatter block containing relevant metadata. Example fields:

### Instruction Files
```yaml
---
applyTo: '**'
description: 'Brief summary of the instruction purpose and scope'
version: '0.1.0'
author: 'Instruction author name or team'
status: 'approved|draft|deprecated'
changelog: ['YYYY-MM-DD: Initial version', 'YYYY-MM-DD: Updates']
tags: ['standards', 'automation']
feedback: 'How to suggest improvements or report issues.'
related: ['custom-instructions.md', 'agent.md', 'prompts.md', 'chatmodes.md']
updated: 'YYYY-MM-DD'
created: 'YYYY-MM-DD'
---
```

### Prompt Files
```yaml
---
promptType: 'copilot|review|automation|custom'
description: 'Purpose and usage of the prompt'
version: '0.1.0'
author: 'Prompt author name or team'
status: 'approved|draft|deprecated'
changelog: ['YYYY-MM-DD: Initial version']
tags: ['prompt', 'copilot']
feedback: 'How to suggest improvements or report issues.'
related: ['custom-instructions.md', 'prompts.md']
updated: 'YYYY-MM-DD'
created: 'YYYY-MM-DD'
---
```

### Chatmode Files
```yaml
---
chatmodeType: 'scenario|role|custom'
description: 'Purpose and usage of the chatmode'
version: '0.1.0'
author: 'Chatmode author name or team'
status: 'approved|draft|deprecated'
changelog: ['YYYY-MM-DD: Initial version']
tags: ['chatmode', 'scenario']
feedback: 'How to suggest improvements or report issues.'
related: ['custom-instructions.md', 'chatmodes.md']
updated: 'YYYY-MM-DD'
created: 'YYYY-MM-DD'
---
```

### Agent Files
```yaml
---
name: 'Agent Name'
description: 'Purpose and integration points for the agent'
agentType: 'automation|review|custom'
tools: ['tool1', 'tool2']
model: 'copilot|claude|gemini'
author: 'Agent author or team'
created: 'YYYY-MM-DD'
version: '0.1.0'
status: 'approved|draft|deprecated'
tags: ['agent', 'automation']
audience: ['automation', 'reviewer']
feedback: 'How to suggest improvements or report issues.'
deprecated: false
---
```

## Checklists

- There is a need for specialized logic, integration, or reporting

### Instruction File Creation Checklist

- [ ] Frontmatter is present and complete
- [ ] Opening paragraph follows required format
- [ ] Purpose and scope is clear
- [ ] Core principles are listed
- [ ] Role definition and context provided
- [ ] Framework or standards to follow are specified
- [ ] Task types and scenarios are described
- [ ] Anti-patterns and exclusions are explicit
- [ ] Examples and references are included
- [ ] Integration references are included
- [ ] Reviewed for clarity and enforceability

### Prompt File Creation Checklist

- [ ] Frontmatter is present and complete
- [ ] Opening paragraph follows required format
- [ ] Purpose and usage is clear
- [ ] Prompt type is specified
- [ ] Examples of usage are included
- [ ] Integration references are included
- [ ] Reviewed for clarity and enforceability

### Chatmode File Creation Checklist

- [ ] Frontmatter is present and complete
- [ ] Opening paragraph follows required format
- [ ] Purpose and usage is clear
- [ ] Chatmode type is specified
- [ ] Examples of usage are included
- [ ] Integration references are included
- [ ] Reviewed for clarity and enforceability
 * Description: Example plugin scaffold.
 * Version: 0.1.0

### Agent File Creation Checklist

- [ ] Frontmatter is present and complete
- [ ] Anti-patterns and exclusions are explicit
- [ ] Integration references are included
- [ ] `.github/custom-instructions.md` updated
- [ ] Prompts.md and chatmodes.md updated if relevant
- [ ] Reviewed for clarity and enforceability

---

## Best Practices

- Always start with the required opening paragraph format.
- Be explicit about what is required, recommended, and prohibited.
- Use examples to illustrate correct and incorrect patterns.
- Reference related standards and instruction files.
- Update instructions when standards or workflows change.
- Place instruction files in `.github/instructions/` or a dedicated `instructions/` folder.
- Name prompt and chatmode files as `name.prompt.md` and `name.chatmode.md` respectively.
- Track changes and updates in the changelog field (for prompts, chatmodes, agents).
- Use the deprecated field and status to mark instructions as deprecated (where supported).
- Specify intended audience for each file (where supported).
- Include sample validation steps or test cases.
- Document rationale for major changes.
- Provide translation guidelines if needed.
- Ensure instructions are accessible and readable.
- Describe how to resolve instruction conflicts.
- Use the feedback field for improvement suggestions (where supported).
- Use status to indicate draft, approved, or deprecated (where supported).
- Document integration with CI/CD or review bots.
- Include security best practices and checks.
- Link to related standards and documentation.
- Provide ready-to-use templates for common types.
- Document impact of changes on workflows and automation.
- Be explicit about what is required, recommended, and prohibited.
- Use examples to illustrate correct and incorrect patterns.
- Reference related standards and instruction files.
- Update instructions when standards or workflows change.
- Place instruction files in `.github/instructions/` or a dedicated `instructions/` folder.
- Name prompt and chatmode files as `name.prompt.md` and `name.chatmode.md` respectively.
- Track changes and updates in the changelog field (for prompts, chatmodes, agents).
- Use the deprecated field and status to mark instructions as deprecated (where supported).
- Specify intended audience for each file (where supported).
- Include sample validation steps or test cases.
- Document rationale for major changes.
- Provide translation guidelines if needed.
- Ensure instructions are accessible and readable.
- Use the feedback field for improvement suggestions (where supported).
- Use status to indicate draft, approved, or deprecated (where supported).
- Document integration with CI/CD or review bots.
- Include security best practices and checks.
- Link to related standards and documentation.
- Provide ready-to-use templates for common types.
- Document impact of changes on workflows and automation.

--

## Example Opening Paragraphs

- Shell script instructions:
  `You are a shell script developer. Follow our Bash standards to create and maintain automation scripts. Avoid complex dependencies, non-POSIX features, or undocumented options unless specified.`
- Documentation instructions:
  `You are a documentation contributor. Follow our markdown standards to create and maintain documentation for automation tools. Avoid technical jargon, missing headers, or outdated documentation unless specified.`
- Agent instructions:
  `You are an agent author. Follow our LightSpeed WP agent framework to create and maintain effective automation agents. Avoid ambiguity, unsupported tools, or missing context unless specified.`
- Prompt instructions:
  `You are a prompt author. Follow our LightSpeed WP prompt framework to create and maintain effective prompts. Avoid ambiguity, unsupported tools, or missing context unless specified.`
- Chatmode instructions:
  `You are a chatmode author. Follow our LightSpeed WP chatmode framework to create and maintain effective chatmodes. Avoid ambiguity, unsupported tools, or missing context unless specified.`

---

**Reference:**
- Always follow these standards for all instruction, prompt, chatmode, and agent files.
- See any related instructions referenced above for further details.
- Each instruction file should refer back to the main instructions [.github/custom-instructions.md](../custom-instructions.md).
- Document integration with CI/CD or review bots.
- Include security best practices and checks.
- Link to related standards and documentation.
- Provide ready-to-use templates for common types.
- Document impact of changes on workflows and automation.

---

Follow these instructions for creating and updating instruction files in the repository to ensure maintainability, coverage, and documentation quality. For further details, see [custom-instructions.md](../custom-instructions.md).
