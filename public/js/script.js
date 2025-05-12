const tabLists = document.querySelectorAll('[role="tablist"]');

tabLists.forEach((tabList) => {
	const tabs = tabList.querySelectorAll('[role="tab"]');

	tabs.forEach((tab) => {
		tab.addEventListener('click', () => {
			// Find all tabs and panels within the current tablist's parent
			const parent = tabList.parentElement;
			const allTabs = parent.querySelectorAll('[role="tab"]');
			const allPanels = parent.querySelectorAll('[role="tabpanel"]');

			// Deactivate all tabs
			allTabs.forEach((btn) => {
				btn.setAttribute('aria-selected', 'false');
			});

			// Hide all panels
			allPanels.forEach((panel) => {
				panel.hidden = true;
			});

			// Activate the clicked tab
			tab.setAttribute('aria-selected', 'true');

			// Show the corresponding panel
			const tabPanelId = tab.getAttribute('aria-controls');
			const tabPanel = parent.querySelector(`#${tabPanelId}`);
			if (tabPanel) {
				tabPanel.hidden = false;
			}
		});

		// Keyboard support
		tab.addEventListener('keydown', (e) => {
			if (e.key === 'Enter' || e.key === ' ') {
				e.preventDefault();
				tab.click();
			}
		});
	});
});
