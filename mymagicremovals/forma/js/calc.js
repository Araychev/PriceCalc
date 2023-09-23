	
	var directionsService = new google.maps.DirectionsService();

	function calcRoute(from,to){
		
		var start = from;
		var end = to;
		var request = {
			origin:start,
			destination:end,
			travelMode: google.maps.DirectionsTravelMode.DRIVING,
			unitSystem: google.maps.DirectionsUnitSystem.METRIC,
			language: 'en-GB',
			region: 'GB'
		};
		document.getElementById("fromAddress").value = "";
		document.getElementById("toAddress").value = "";
		document.getElementById("distance").value = 0;
		document.getElementById("seconds").value = 0;
		
		directionsService.route(request, function(response, status) {
			document.getElementById("distance").value = status;
			if (status == google.maps.DirectionsStatus.OK) {
				var distance = response.routes[0].legs[0].distance.text;
				var seconds = response.routes[0].legs[0].duration.value;
				var calc_distance = response.routes[0].legs[0].distance.value;
				var fromAddress = response.routes[0].legs[0].start_address;
				var toAddress = response.routes[0].legs[0].end_address;
				
				miles = calc_distance / 1.609;
				miles = (miles / 1000).toFixed(1);				
				
				document.getElementById("fromAddress").value = fromAddress;
				document.getElementById("toAddress").value = toAddress;
				document.getElementById("distance").value = miles;
				document.getElementById("seconds").value = seconds;
	
			}
			else {
			}
		
		});
	};
		
	function calcTotal(){
		var total = 0;
		var procentDiscount = document.getElementById("procentDiscount").value;
		var discount = 0;
		var totalWithDiscount = 0;
		var totalTime = 0;
		
		
		var priceOfMiles = document.getElementById("priceOfMiles").value;
		var miles = document.getElementById("distance").value;
		
		total += parseFloat(priceOfMiles) * parseFloat(miles);
		
		var travellTime = document.getElementById("seconds").value;
		var cmbLoadTime = document.getElementById("loadingTime");
		var loadTime = cmbLoadTime.options[cmbLoadTime.selectedIndex].value.trim();
		var cmbUnloadTime = document.getElementById("unloadingTime");
		var unLoadTime = cmbUnloadTime.options[cmbUnloadTime.selectedIndex].value.trim();
		totalTime = parseInt(travellTime) + parseInt(loadTime) * 60 + parseInt(unLoadTime) * 60; // секунди
		
		var hour = Math.floor(totalTime / 3600);
		var min = Math.floor((totalTime - hour * 3600) / 60);
		
		if (min == 0){
			document.getElementById("totalTime").value = hour + "h";
		}			
		else if ((min > 0) && (min <= 30)){
			document.getElementById("totalTime").value = hour + "h 30min";
			hour = parseInt(hour) + 0.5;
		}
		else{
			hour = hour + 1;
			document.getElementById("totalTime").value = hour + "h";
		}
		
		// ако е по малко от два часа, го приравнявам на 2 часа
		if (hour < 2){
			hour = 2;
			document.getElementById("totalTime").value = hour + "h";
		}
		
		var procentWeekend = document.getElementById("procentWeekend").value;
		var cmbNumberOfMen = document.getElementById("numberOfMen");
		var numberOfMen = cmbNumberOfMen.options[cmbNumberOfMen.selectedIndex].value.trim();
		
		var cmbVanSize = document.getElementById("vanSize");
		var vanSize = cmbVanSize.options[cmbVanSize.selectedIndex].value.trim();
		
		if (numberOfMen == "1"){
			total += parseInt(vanSize) * hour;
		}
		
		if (numberOfMen == "2"){
			total += (parseInt(vanSize) + 10) * hour;
		}
		
		if (numberOfMen == "3"){
			total += (parseInt(vanSize) + 20) * hour;
		}
		
		var cmbFromFloor = document.getElementById("fromFloor");
		fromFloor = cmbFromFloor.options[cmbFromFloor.selectedIndex].value.trim();
		var cmbFromLift = document.getElementById("fromLift");
		fromLift = cmbFromLift.options[cmbFromLift.selectedIndex].value.trim();
		if (fromLift == "0"){
			total += Math.abs(parseInt(fromFloor)) * parseInt(numberOfMen);
		}
		
		var cmbToFloor = document.getElementById("toFloor");
		toFloor = cmbToFloor.options[cmbToFloor.selectedIndex].value.trim();
		var cmbToLift = document.getElementById("toLift");
		toLift = cmbToLift.options[cmbToLift.selectedIndex].value.trim();
		if (toLift == "0"){
			total += Math.abs(parseInt(toFloor)) * parseInt(numberOfMen);
		}
		
		var priceCongestionZone = document.getElementById("priceCongestionZone").value;
		var cmbCongestionZone = document.getElementById("congestionZone");
		var congestionZone = cmbCongestionZone.options[cmbCongestionZone.selectedIndex].value.trim();
		if (congestionZone == "1"){
			total += parseFloat(priceCongestionZone);
		}			
		
		
		var dateString = document.getElementById('movingDate').value;
		var date = new Date(dateString);
		
		// 6 = Saturday, 0 = Sunday			
		if (date.getDay()%6 == 0){
			total = total + ((parseInt(procentWeekend) / 100) * total);
		}
		
		document.getElementById("total").value = total.toFixed(2);
		discount = Number(((parseInt(procentDiscount) / 100) * total).toFixed(2));
		document.getElementById("discount").value = discount;
		document.getElementById("totalWithDiscount").value = (total - discount).toFixed(2);
	};
	
	function calcDistance(){
		var fromPostCode = document.getElementById("fromPostCode").value.trim();
		var toPostCode = document.getElementById("toPostCode").value.trim();
		if ((fromPostCode != "") && (toPostCode != "")){
			calcRoute(fromPostCode, toPostCode);
		}
	}

	
	