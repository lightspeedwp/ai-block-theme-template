# Getting Started — Block Theme Agent Setup

## 📋 Step-by-Step Process (with mustache placeholders)

1. **Open the Documentation Folder**
   - In VS Code or your preferred editor, open the folder containing:
     - `{{documentation_file}}`
     - `{{instructions_file}}`
     - `{{prompt_file}}`
     - `{{chat_mode_file}}`
     - (and other docs/guides as needed)

2. **Review Canonical Guidelines**
   - Start by reading `{{documentation_file}}` for the canonical theme structure and standards.
   - Confirm you understand required files and directories.

3. **Scan All Reference Files**
   - Review:
     - Contribution instructions: `{{instructions_file}}`
     - Onboarding/prompts: `{{prompt_file}}`
     - Copilot/agent chat modes: `{{chat_mode_file}}`
   - Make note of any mustache placeholders used for automation.

4. **Verify File References**
   - Check that each documentation file correctly references the other files using mustache values (e.g., `./{{instructions_file}}`).
   - Ensure all references are accurate and resolve in your workspace.

5. **Agent Mode Instructions**
   - Open `agent-mode-instructions.md` and `agent-mode-prompt.md`.
   - Use these files to understand the expected agent workflow and prompt structure.

6. **Set Up Automation (Optional)**
   - If using Copilot or automation tooling, confirm it pulls references from the documentation folder and substitutes mustache placeholders as needed.

7. **Begin Working**
   - In VS Code: Use the file explorer, markdown preview, and search tools to navigate and edit.
   - In browser (e.g., GitHub): Use file links in README, click through the docs, and open/edit files as needed.

8. **Ask for Help and Collaborate**
   - Refer to the “How to ask for help” section in your instructions file.
   - Use contribution guidelines and prompts for onboarding or submitting changes.

---

## 🚀 Short Agent Prompt (to get started)

> Use `./{{instructions_file}}` and `./{{prompt_file}}` for all steps.  
> My goal is to review and implement the block theme documentation and automation setup.  
> Start by listing the files, their purpose, and how they reference each other.  
> Plan your workflow (VS Code or browser), then proceed to validate references and begin setup.

---

**Tips:**
- Use markdown preview in VS Code for easier reading.
- Keep all references to files as mustache placeholders for easy automation.
- If unsure, start with the main documentation file, then work outward.