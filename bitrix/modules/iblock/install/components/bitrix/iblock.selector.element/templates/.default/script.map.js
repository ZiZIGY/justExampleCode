{"version":3,"sources":["script.js"],"names":["BX","window","IblockSelectorElement","this","id","filter","create","settings","self","initialize","prototype","defaultFilter","internalFilter","quickSearchField","type","isPlainObject","isArray","isNotEmptyString","loadFilter","addCustomEvent","proxy","applyFilter","UI","ButtonPanel","button","currentSlider","isNotEmptyObject","TYPE","top","SidePanel","Instance","postMessageTop","getSliderByWindow","close","destroy","getUrl","bind","currentPreset","currentFields","searchFieldData","Main","filterManager","getById","getPreset","getCurrentPresetData","concat","FIELDS","ADDITIONAL","getSearch","prepareSquaresData","map","item","field","find","currentField","NAME","value","isEmptyField","row","name","key","VALUE","VALUES","isString","SUB_TYPE","loadQuickSearch","length","quickSearchValue","index","data","found","getSearchString","QUICK_SEARCH","element","array","LABEL","findIndex","push","eventFilterId","values","ob","filterPromise","filterParams"],"mappings":"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","file":"script.map.js"}