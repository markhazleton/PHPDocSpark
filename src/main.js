// Main entry point for Vite build
// Import all CSS
import './css/site.scss';

// Import all JavaScript
import './js/vendor.js';
import './js/custom.js';
import './js/pages/data-analysis.js';
import { initChart } from './js/pages/chart.js';

// Initialize page-specific functionality after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Get current page from URL or data attribute
    const urlParams = new URLSearchParams(window.location.search);
    const currentPage = urlParams.get('page') || 'document_view';
    
    // Page-specific initialization
    if (currentPage === 'chart') {
        initChart();
    }
});

