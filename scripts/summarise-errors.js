// Summarise theme.json validation errors to Markdown
const fs = require('fs');
const path = require('path');

const errorsPath = process.argv[2] || 'reports/theme-json/errors.json';
const outPath = process.argv[3] || 'reports/theme-json/report.md';

function summarise(errors) {
  if (!Array.isArray(errors) || errors.length === 0) {
    return '# Theme JSON Validation Report\n\n✅ No errors found.';
  }
  let summary = `# Theme JSON Validation Report\n\nFound ${errors.length} error(s):\n`;
  errors.forEach((err, i) => {
    summary += `\n${i + 1}. **File:** ${err.file}\n   - **Path:** \\`${err.jsonPath}\\`\n   - **Type:** ${err.type}\n   - **Message:** ${err.message}\n   - **Suggestion:** ${err.suggestion || 'N/A'}\n`;
  });
  return summary;
}

try {
  const errors = JSON.parse(fs.readFileSync(errorsPath, 'utf8'));
  const report = summarise(errors);
  fs.writeFileSync(outPath, report);
  console.log(`[summarise-errors] Report written to ${outPath}`);
} catch (e) {
  console.error('[summarise-errors] Failed:', e);
  process.exit(1);
}
