FR.tempPanel = new Ext.Panel({html:''});
FR.feedback = function(text) {
	if (!text) {return false;}
	if (Ext.util.Format.stripTags(text).length > 100) {
		new Ext.Window({
			width: 350, height: 160, layout: 'fit', items: {bodyStyle: 'padding:5px', html: text, autoScroll: true}
		}).show();
		return false;
	}
	var delay = Math.max(text.length/15, 2);
	if (!FR.UI.feedbackCt) {
		FR.UI.feedbackCt = Ext.DomHelper.append(document.body, {style:'position:absolute;width:300px;z-index:9999999'}, true);
	}
	var m = Ext.DomHelper.append(FR.UI.feedbackCt, {html:'<div class="fr-feedback-msg">'+text+'</div>'}, true);
	FR.UI.feedbackCt.alignTo(Ext.getBody(), 'tr-tr', [-5, 0]);
	m.slideIn('t').pause(delay).ghost('b', {remove: true});
};

var bodyWidth = Ext.getBody().getSize().width;
if (bodyWidth < 480) {
	FR.isMobile = true;
}

FR.initLayout = function() {
	new Ext.Viewport({
		id: 'viewport',
		layout: 'border',
		items: [
			{region: 'north', height: 0, items: FR.tempPanel},
			{
				region: 'west', layout: 'fit', split: true, width: 190,
				id: 'FR-Tree-Region', stateful: false,
				items: FR.tree.panel
			},
			{
				region: 'center',
				layout: 'fit',
				items: [
					{
						layout: 'card',
						id: 'cardDisplayArea',
						activeItem: 1,
						items: [
							{
								xtype: 'tabpanel',
								id: 'gridTabPanel',
								activeItem: 0,
								items: [
									{
										title: '',
										id: 'gridTab',
										layout: 'fit',
										items: FR.grid.panel
									}
								],
								listeners: {
									'tabchange': function(tp, tab) {
										if (tab.form) {FR.thisFormPanel = tab;}
									}
								}
							},
							{id: 'appTab', html: '', layout: 'fit'}
						]
					}
				]
			}
		]
	})
};