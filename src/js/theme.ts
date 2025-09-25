/**
 * Main theme JavaScript entry point
 * Integrates various WordPress packages for enhanced functionality
 */
import { initAccessibility, announceContentChange } from './accessibility';
import { generateThemeStyles, applyResponsiveStyles } from './style-engine';
import { __ } from '@wordpress/i18n';

/**
 * Initialize theme JavaScript
 */
function initTheme() {
	// Initialize accessibility features
	initAccessibility();

	// Apply theme styles
	const themeStyles = generateThemeStyles();
	console.log('Theme styles generated:', themeStyles);

	// Setup responsive behavior
	setupResponsiveFeatures();

	// Initialize interactive components
	initInteractiveComponents();

	// Announce theme ready state
	announceContentChange(
		__('Theme interactive features loaded', 'ai-block-theme-template')
	);
}

/**
 * Setup responsive features
 */
function setupResponsiveFeatures() {
	// Apply responsive styles to key elements
	const mainContent = document.querySelector('main');
	if (mainContent) {
		applyResponsiveStyles(mainContent as HTMLElement, {
			mobile: {
				spacing: { padding: '1rem' },
			},
			tablet: {
				spacing: { padding: '2rem' },
			},
			desktop: {
				spacing: { padding: '3rem' },
			},
		});
	}
}

/**
 * Initialize interactive components
 */
function initInteractiveComponents() {
	// Mobile menu toggle
	const menuToggle = document.querySelector('.menu-toggle');
	const navigationMenu = document.querySelector('.navigation-menu');

	if (menuToggle && navigationMenu) {
		menuToggle.addEventListener('click', () => {
			const isExpanded =
				menuToggle.getAttribute('aria-expanded') === 'true';
			menuToggle.setAttribute('aria-expanded', (!isExpanded).toString());
			navigationMenu.classList.toggle('is-open');

			announceContentChange(
				isExpanded
					? __('Menu closed', 'ai-block-theme-template')
					: __('Menu opened', 'ai-block-theme-template')
			);
		});
	}

	// Skip link functionality
	const skipLinks = document.querySelectorAll('.skip-link');
	skipLinks.forEach((link) => {
		link.addEventListener('click', (e) => {
			e.preventDefault();
			const target = document.querySelector(
				link.getAttribute('href') || ''
			);
			if (target) {
				(target as HTMLElement).focus();
				announceContentChange(
					__('Skipped to content', 'ai-block-theme-template')
				);
			}
		});
	});
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initTheme);
} else {
	initTheme();
}

// Export for use in other modules
export { initTheme };
