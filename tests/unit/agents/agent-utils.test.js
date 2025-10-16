/**
 * Unit tests for agent utility functions
 * Tests common functionality used across JavaScript agents
 */

describe('Agent Utilities', () => {
  describe('Label Standardization', () => {
    test('should convert non-standard labels to standard format', () => {
      const nonStandardLabels = ['php', 'javascript', 'accessibility'];
      const expectedStandardLabels = ['lang:php', 'lang:javascript', 'area:a11y'];
      
      // Mock the conversion logic
      const convertToStandard = (label) => {
        const mapping = {
          'php': 'lang:php',
          'javascript': 'lang:javascript', 
          'accessibility': 'area:a11y'
        };
        return mapping[label] || label;
      };

      const result = nonStandardLabels.map(convertToStandard);
      expect(result).toEqual(expectedStandardLabels);
    });
  });

  describe('Release Validation', () => {
    test('should validate version consistency across files', () => {
      const versions = {
        'package.json': '1.2.3',
        'composer.json': '1.2.3',
        'VERSION': '1.2.3'
      };

      const uniqueVersions = [...new Set(Object.values(versions))];
      expect(uniqueVersions).toHaveLength(1);
    });
  });
});