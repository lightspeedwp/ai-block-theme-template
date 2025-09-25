/**
 * WordPress Style Engine utilities for dynamic styling
 */
import { generateStyles } from '@wordpress/style-engine';

/**
 * Generate theme styles using WordPress Style Engine
 */
export function generateThemeStyles() {
	const styles = generateStyles({
		spacing: {
			padding: '1rem',
			margin: '0.5rem',
		},
		typography: {
			fontSize: '16px',
			fontFamily: 'system-ui, sans-serif',
			lineHeight: 1.6,
		},
		color: {
			background: 'var(--wp--preset--color--base)',
			text: 'var(--wp--preset--color--contrast)',
		},
	});

	return styles;
}

/**
 * Apply responsive styles using Style Engine
 */
export function applyResponsiveStyles(element: HTMLElement, styleConfig: any) {
	const breakpoints = {
		mobile: '480px',
		tablet: '768px',
		desktop: '1024px',
	};

	Object.entries(breakpoints).forEach(([device, width]) => {
		if (styleConfig[device]) {
			const mediaQuery = window.matchMedia(`(min-width: ${width})`);

			const applyStyles = () => {
				if (mediaQuery.matches) {
					const styles = generateStyles(styleConfig[device]);
					Object.assign(element.style, styles.css);
				}
			};

			mediaQuery.addEventListener('change', applyStyles);
			applyStyles(); // Apply initial styles
		}
	});
}

/**
 * Generate block support styles
 */
export function generateBlockSupportStyles(blockAttributes: any) {
	const supportStyles = {
		spacing: blockAttributes.spacing || {},
		typography: blockAttributes.typography || {},
		color: blockAttributes.color || {},
		border: blockAttributes.border || {},
	};

	return generateStyles(supportStyles);
}
