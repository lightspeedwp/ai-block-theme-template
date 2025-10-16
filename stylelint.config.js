/** @type {import('stylelint').Config} */
module.exports = {
  extends: ["stylelint-config-standard", "stylelint-config-recommended-scss"],
  overrides: [
    {
      files: ["**/*.scss"],
      customSyntax: "postcss-scss",
    },
  ],
  rules: {
    "color-hex-length": "short",
  },
};
