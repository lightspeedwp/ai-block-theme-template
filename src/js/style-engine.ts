/**
 * WordPress Style Engine utilities for dynamic styling
 */
import * as styleEngine from '@wordpress/style-engine';

/**
 * Generate theme styles using WordPress Style Engine
 */
export function generateThemeStyles() {
	const styles = styleEngine.generateStyles({
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
 * WordPress Style Engine integration for dynamic styling
 */

/**
 * Apply dynamic styles to an element using WordPress Style Engine
 *
 * @param {HTMLElement} element     - The element to apply styles to
 * @param {any}         styleConfig - The style configuration object
 */
function applyDynamicStyles(element: HTMLElement, styleConfig: any): void {
	// Apply basic styles
	if (styleConfig.backgroundColor) {
		element.style.backgroundColor = styleConfig.backgroundColor;
	}
	if (styleConfig.textColor) {
		element.style.color = styleConfig.textColor;
	}
	if (styleConfig.fontSize) {
		element.style.fontSize = styleConfig.fontSize;
	}
	if (styleConfig.padding) {
		element.style.padding = styleConfig.padding;
	}
	if (styleConfig.margin) {
		element.style.margin = styleConfig.margin;
	}
}

/**
 * Apply responsive styles to an element
 *
 * @param {HTMLElement} element     - The element to apply styles to
 * @param {any}         styleConfig - The style configuration object
 */
function applyResponsiveStyles(element: HTMLElement, styleConfig: any): void {
	const breakpoints = ['mobile', 'tablet', 'desktop'];

	breakpoints.forEach((device) => {
		if (styleConfig[device]) {
			const mediaQuery = getMediaQuery(device);
			if (window.matchMedia(mediaQuery).matches) {
				applyDynamicStyles(element, styleConfig[device]);
			}
		}
	});
}

/**
 * Get media query for device breakpoint
 *
 * @param {string} device - The device type
 * @return {string} The media query string
 */
function getMediaQuery(device: string): string {
	const queries = {
		mobile: '(max-width: 767px)',
		tablet: '(min-width: 768px) and (max-width: 1023px)',
		desktop: '(min-width: 1024px)',
	};
	return queries[device as keyof typeof queries] || queries.desktop;
}

/**
 * Generate block styles from attributes
 *
 * @param {any} blockAttributes - The block attributes object
 * @return {any} The generated styles object
 */
function generateBlockStyles(blockAttributes: any): any {
	return {
		backgroundColor: blockAttributes?.backgroundColor,
		textColor: blockAttributes?.textColor,
		fontSize: blockAttributes?.style?.typography?.fontSize,
		fontFamily: blockAttributes?.style?.typography?.fontFamily,
		padding: blockAttributes?.style?.spacing?.padding,
		margin: blockAttributes?.style?.spacing?.margin,
	};
}

// Export functions for use in other modules
export {
	applyDynamicStyles,
	applyResponsiveStyles,
	generateBlockStyles,
	getMediaQuery,
};
