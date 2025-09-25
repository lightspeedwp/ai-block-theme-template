---
# YAML Frontmatter Template - Copy this structure for new agent files
# Title: Keep under 50 characters, descriptive but concise
name: 'example-agent-name'
# Description: 150-200 characters, specific and actionable. Describe WHAT the agent does, WHO it helps, and WHEN to use it
description: 'WordPress-focused agent that helps developers create accessible, performant block themes by auditing code, optimizing theme.json, and ensuring WCAG compliance'
# Tools: List the specific tools this agent needs to function effectively
tools:
    [
        'read_file',
        'replace_string_in_file',
        'semantic_search',
        'grep_search',
        'run_in_terminal',
    ]
# Model: Specify the recommended model for optimal performance
model: 'gpt-4o'
# License: Always use GPL-3.0-or-later for WordPress projects
license: 'GPL-3.0-or-later'
# WordPress Domain: Choose primary WordPress domain this agent serves
domain: 'block-themes' # Options: wp-core, block-themes, plugin-hardening, performance, accessibility, security, i18n
# Stability: Indicate maturity level
stability: 'stable' # Options: experimental, incubating, stable
---

# [Agent Name] (50 chars max)

**Purpose**: One sentence describing the agent's primary function and value proposition. (80-100 characters)

## When to Use This Agent

- Specific scenario 1 (when working with theme.json files)
- Specific scenario 2 (when auditing accessibility compliance)
- Specific scenario 3 (when optimizing performance)

## What This Agent Does

### Core Responsibilities (3-5 key areas)

- **Primary Function**: Detailed explanation of main capability
- **Secondary Function**: Supporting capability that adds value
- **Quality Assurance**: How it ensures WordPress standards compliance

### WordPress Integration Points

- Specific WordPress APIs, hooks, or patterns it works with
- Theme.json, block.json, or other WordPress-specific file formats
- WordPress coding standards and best practices it enforces

## Domain Expertise

### WordPress Knowledge Areas

- List specific WordPress concepts (blocks, themes, plugins, etc.)
- Relevant WordPress APIs and development patterns
- Integration with WordPress ecosystem tools

### Technical Skills

- Code review and analysis capabilities
- File manipulation and optimization techniques
- Testing and validation approaches

## Common Tasks & Workflows

1. **Task Category 1**: Step-by-step workflow description
2. **Task Category 2**: Another common workflow
3. **Task Category 3**: Additional workflow pattern

## Quality Standards

- WCAG 2.2 AA compliance requirements
- WordPress coding standards adherence
- Performance optimization criteria
- Security best practices integration

## Anti-Patterns to Avoid

- ❌ **Specific anti-pattern**: Why it's problematic and what to do instead
- ❌ **Another anti-pattern**: Clear explanation of the issue
- ❌ **Third anti-pattern**: Alternative approach recommendation

## Escalation & Handoff Criteria

**Escalate to human review when**:

- Complex architectural decisions required
- Breaking changes to existing functionality
- Multi-team coordination needed

**Hand off to other agents when**:

- Security vulnerabilities discovered → security-hardening-reviewer
- Performance issues identified → performance-profiler
- Accessibility concerns found → accessibility-auditor

## Integration with Other Agents

- **Complementary agents**: Which agents work well together
- **Workflow coordination**: How to sequence agent interactions
- **Shared outputs**: Common deliverables between agents

---

## Template Guidelines

### Title Requirements

- Maximum 50 characters
- Use title case
- Be specific about WordPress focus
- Avoid generic terms like "Expert" or "Specialist"

### Description Requirements

- 150-200 characters optimal length
- Answer: WHAT does it do, WHO does it help, WHEN to use it
- Include specific WordPress terminology
- Be actionable and concrete

### Content Structure

- Keep total file length under 400 lines
- Use consistent heading hierarchy
- Include specific WordPress examples
- Reference existing documentation rather than duplicating
- Focus on WordPress ecosystem integration

### WordPress Alignment

- Always consider WordPress coding standards
- Reference theme.json, block.json, and WordPress APIs
- Include accessibility and performance considerations
- Maintain GPL-3.0-or-later licensing consistency
