# WordPress Block Theme Documentation & Automation

This folder contains all reference documentation, onboarding instructions, automation prompts, and chat mode definitions required for building and maintaining a modern WordPress block theme.

---

## 📁 Documentation Folder Inventory

All core files are stored in this folder for simplicity and automation.  
**References in this README use mustache placeholders so automation can substitute real file names and paths.**

### Key Files (with mustache values)

- **Theme Guidelines:**  
  [`{{documentation_file}}`](./{{documentation_file}})
- **Canonical Inventory:**  
  [`{{inventory_file}}`](./{{inventory_file}})
- **Pattern Header Specification:**  
  [`{{pattern_header_spec_file}}`](./{{pattern_header_spec_file}})
- **Contribution Instructions:**  
  [`{{instructions_file}}`](./{{instructions_file}})
- **Onboarding/Contribution Prompts:**  
  [`{{prompt_file}}`](./{{prompt_file}})
- **Copilot Chat Modes:**  
  [`{{chat_mode_file}}`](./{{chat_mode_file}})
- **Additional Documentation and Guides:**  
  (See other `.md` files in this folder with mustache values, e.g., `{{implementation_guide_file}}`.)

---

## 🚀 How to Use This Documentation

1. **Start Here:**  
   Read [`{{documentation_file}}`](./{{documentation_file}}) for canonical structure and development workflow.
2. **Reference Inventory:**  
   Consult [`{{inventory_file}}`](./{{inventory_file}}) for templates, parts, patterns, and categories.
3. **Follow Contribution & Coding Standards:**  
   - See [`{{instructions_file}}`](./{{instructions_file}}) for organization and workflow standards.
   - See [`{{prompt_file}}`](./{{prompt_file}}) for onboarding and automation prompts.
   - Use [`{{chat_mode_file}}`](./{{chat_mode_file}}) for advanced Copilot and chat automation setup.
4. **Implement Patterns & Templates:**  
   - Use header specifications from [`{{pattern_header_spec_file}}`](./{{pattern_header_spec_file}}).
   - Reference implementation guides (see other mustache `.md` files).

---

## 🌍 Internationalisation (i18n) & Automation

- All documentation, instructions, prompts, and chat mode files use **mustache placeholders** for translatable and automatable values (e.g., `{{i18n_hero_title}}`, `{{i18n_cta_description}}`).
- Ensure all code, patterns, templates, and documentation wrap user-facing text in translation functions and use mustache placeholders for automation.
- All necessary WordPress i18n packages are installed and configured.
- Language files are stored in the theme’s `languages/` folder.

---

## 🛠️ Automation & Repo Generation

- **Copilot, CI, and automation tools must reference:**
  - [`{{instructions_file}}`](./{{instructions_file}})
  - [`{{prompt_file}}`](./{{prompt_file}})
  - [`{{chat_mode_file}}`](./{{chat_mode_file}})
- All onboarding and prompts are centralized for easy scaffolding and automation.

---

## 👨‍💻 Contribution Workflow

1. **Install dependencies:**  
   `npm install` (JS/CSS), `composer install` (PHP, if used)
2. **Build assets:**  
   `npm run start` (development), `npm run build` (production)
3. **Lint & test:**  
   `npm run lint`, `composer run lint`, `npm run test`
4. **Follow coding standards and onboarding instructions:**  
   Always reference the documentation and prompts in this folder.

---

## 📚 Further Reading & Support

- For detailed implementation, see documentation files in this folder, referenced with mustache values for automation.
- For organization-wide standards, see:
  - [LightSpeed Custom Instructions](https://github.com/lightspeedwp/.github/blob/master/.github/custom-instructions.md)
  - [Coding Standards](https://github.com/lightspeedwp/.github/blob/master/.github/instructions/coding-standards.instructions.md)
- For help, open a discussion or issue in the repository.

---

**All contributors and automation tools must reference the instructions, prompts, and chat mode files using the mustache placeholders defined above. Automation should substitute these values when scaffolding or generating a new repository instance.**