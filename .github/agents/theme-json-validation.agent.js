// Theme JSON Validation Agent stub (Node.js)
/* eslint-disable */
// last_updated: 2025-10-17

/**
 * Minimal stub for the Theme JSON Validation Agent. This file defines a
 * single `runAgent` function that reads configuration from environment
 * variables and prints a dry‑run configuration. In a real implementation
 * you would load the instructions, prompt, and chatmode from the
 * accompanying markdown files and orchestrate the validation workflow.
 *
 * To execute a dry run:
 *   node theme-json-validation.agent.js --dry-run
 */
export async function runAgent(opts = { dryRun: true }) {
  const config = {
    model: process.env.AGENT_MODEL || "auto",
    instructionsPath: process.env.AGENT_INSTRUCTIONS || "./theme-json-validation.instructions.md",
    promptPath: process.env.AGENT_PROMPT || "./theme-json-validation.prompt.md",
    chatModePath: process.env.AGENT_CHATMODE || "./theme-json-validation.chatmode.md",
    schemaUrl: process.env.THEME_JSON_SCHEMA || "https://schemas.wp.org/trunk/theme.json",
    rootPath: process.env.THEME_JSON_ROOT || ".",
    globs: process.env.THEME_JSON_GLOBS ? process.env.THEME_JSON_GLOBS.split(",") : ["theme.json", "styles/**/*.json"],
    mode: process.env.THEME_JSON_MODE || "propose",
    reportDir: "reports/theme-json"
  };

  if (opts.dryRun) {
    console.log("[theme-json-validation] dry-run", config);
    return;
  }

  // Step 1: Validate theme.json and style variations
  console.log("[theme-json-validation] Running schema validation...");
  await import('child_process').then(({ execSync }) => {
    execSync(`npm run validate:theme-json`, { stdio: 'inherit' });
  });

  // Step 2: Summarise errors
  console.log("[theme-json-validation] Summarising errors...");
  await import('child_process').then(({ execSync }) => {
    execSync(`npm run summarise:theme-json`, { stdio: 'inherit' });
  });

  // Step 3: Optionally format JSON files (in fix mode)
  if (config.mode === 'fix') {
    console.log("[theme-json-validation] Formatting JSON files...");
    await import('child_process').then(({ execSync }) => {
      execSync(`npm run format:theme-json`, { stdio: 'inherit' });
    });
  }

  console.log(`[theme-json-validation] Reports written to ${config.reportDir}`);
}

if (import.meta.url === `file:///${process.argv[1]}`) {
  const dryRun = process.argv.includes("--dry-run");
  runAgent({ dryRun }).catch(err => (console.error(err), process.exit(1)));
}
