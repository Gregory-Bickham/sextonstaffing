var PageComingSoon = function () {
    return {
      //Coming Soon
      initPageComingSoon: function () {
			var newYear = new Date(2016, 8);
			newYear = new Date(newYear.getMonth() + 1, 1 - 1, 1);
			$('#defaultCountdown').countdown({until: newYear})
        }
    };
}();
