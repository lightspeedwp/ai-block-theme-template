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
 * Handle keyboard navigation for accessibility
 *
 * @param {KeyboardEvent} event - The keyboard event
 */
function handleKeyboardNavigation(event: KeyboardEvent): void {
	// Skip links functionality
	if (event.key === 'Tab' && !event.shiftKey) {
		const target = event.target as HTMLElement;
		const activeElement = target?.ownerDocument
			?.activeElement as HTMLElement;

		if (activeElement && activeElement.classList.contains('skip-link')) {
			const targetId = activeElement.getAttribute('href')?.substring(1);
			if (targetId) {
				const skipTarget = document.getElementById(targetId);
				if (skipTarget) {
					skipTarget.focus();
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
 * Announce message to screen readers
 *
 * @param {string} message  - The message to announce
 * @param {string} priority - The priority level (polite or assertive)
 */
function announceToScreenReader(
	message: string,
	priority: string = 'polite'
): void {
	const announcer = document.createElement('div');
	announcer.setAttribute('aria-live', priority);
	announcer.setAttribute('aria-atomic', 'true');
	announcer.style.position = 'absolute';
	announcer.style.left = '-10000px';
	announcer.style.width = '1px';
	announcer.style.height = '1px';
	announcer.style.overflow = 'hidden';

	document.body.appendChild(announcer);
	announcer.textContent = message;

	setTimeout(() => {
		document.body.removeChild(announcer);
	}, 1000);
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', initAccessibility);
} else {
	initAccessibility();
}
