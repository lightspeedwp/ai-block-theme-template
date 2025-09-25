/**
 * Theme accessibility utilities using WordPress packages
 */
import { speak } from '@wordpress/a11y';
import { __ } from '@wordpress/i18n';

/**
 * Initialize accessibility features for the theme
 */
export function initAccessibility() {
	// Announce theme features to screen readers
	speak(__('AI Block Theme Template loaded', 'ai-block-theme-template'));

	// Add keyboard navigation support
	document.addEventListener('keydown', handleKeyboardNavigation);

	// Initialize focus management
	initFocusManagement();
}

/**
 * Handle keyboard navigation
 */
function handleKeyboardNavigation(event: KeyboardEvent) {
	// Skip links functionality
	if (event.key === 'Tab' && !event.shiftKey) {
		const activeElement = document.activeElement as HTMLElement;

		if (activeElement && activeElement.classList.contains('skip-link')) {
			const targetId = activeElement.getAttribute('href')?.substring(1);
			if (targetId) {
				const target = document.getElementById(targetId);
				if (target) {
					target.focus();
					speak(
						__('Skipped to main content', 'ai-block-theme-template')
					);
				}
			}
		}
	}
}

/**
 * Initialize focus management
 */
function initFocusManagement() {
	// Add focus indicators for interactive elements
	const interactiveElements = document.querySelectorAll(
		'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
	);

	interactiveElements.forEach((element) => {
		element.addEventListener('focus', () => {
			element.classList.add('has-focus');
		});

		element.addEventListener('blur', () => {
			element.classList.remove('has-focus');
		});
	});
}

/**
 * Announce dynamic content changes
 */
export function announceContentChange(
	message: string,
	priority: 'polite' | 'assertive' = 'polite'
) {
	speak(message, priority);
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initAccessibility);
} else {
	initAccessibility();
}
