# Card Gradient Section Style

## Overview

The Card Gradient section style provides a visually appealing card-like section with a soft gradient background, rounded corners, and subtle shadow. It is designed for accessible contrast and keyboard/screen reader support.

## How to Use

1. In the WordPress block editor, add a Group block.
2. In the block settings sidebar, select "Card Gradient" from the style options.
3. Add your content inside the Group block.

## Accessibility Notes

- The style uses a high-contrast text color (#222) on a light gradient background, meeting WCAG 2.2 AA standards.
- All interactive elements inside the section remain keyboard accessible.
- The section is announced as a region with heading for screen readers.

## Customization

You can adjust the gradient, border radius, shadow, and padding by editing the style in `theme.json` or `styles/card-gradient.json`.

## Example

```
<!-- wp:group {"style":{"background":"linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%)","borderRadius":"1rem","boxShadow":"0 2px 8px rgba(0,0,0,0.08)","padding":"2rem","color":"#222"},"className":"is-style-card-gradient"} -->
<div class="wp-block-group is-style-card-gradient" style="background:linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);border-radius:1rem;box-shadow:0 2px 8px rgba(0,0,0,0.08);padding:2rem;color:#222;">
  <h2>Section Title</h2>
  <p>Your content here.</p>
</div>
<!-- /wp:group -->
```

## Files

- `theme.json`: Registers the style for the Group block.
- `styles/card-gradient.json`: Defines the style properties.

---

Generated with accessibility in mind. Please review and test for your use case.
