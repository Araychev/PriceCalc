	function calcTotal(){
		var totals = ["totalSingleBedroom", "totalDoubleBedroom", "totalLounge", 
					"totalStairs", "totalHallwayRegular", "totalSmallRug", 
					"totalLargeRug", "totalTwoSeatSofa", "totalTreeSeatSofa", 
					"totalFabricArmchair", "totalShortPairOfCurtains", "totalLongPairOfCurtains", 
					"totalSingleMattress", "totalDoubleMattress", "totalRegularCleaning",
					"totalDeepCleaning", "totalOvenCleaning", "totalMicrowave",
					"totalHob", "totalEndOfTenancy"];
		
		var total = 0;
		var discount = 0;
		var totalWithDiscount = 0;
		for (i = 0; i < totals.length; i++) { 
			var totalItem = document.getElementById(totals[i]).value;
			if( totalItem.charAt( 0 ) === '£' )
				totalItem = totalItem.slice( 1 );
			total = total + parseFloat(totalItem);
		}
		document.getElementById("result").value = '£' + total;
		document.getElementById("hiddenResult").value = total;
		
		if (total >= 250)
			discount = Number(((20 / 100) * total).toFixed(2));
		
		document.getElementById("discount").value = '£' + discount;
		document.getElementById("hiddenDiscount").value = discount;
		document.getElementById("totalWithDiscount").value = '£' + (total - discount);
		document.getElementById("hiddenTotalWithDiscount").value = (total - discount);
	};
	
	function calcItem(priceId, cmbId, totalId){
		var total = 0;
		var price = document.getElementById(priceId).value;
		var cmbCnt = document.getElementById(cmbId);
		var cnt = cmbCnt.options[cmbCnt.selectedIndex].value.trim();
	
		if (cnt != "")
			total = parseFloat(price) * parseFloat(cnt);
			
		document.getElementById(totalId).value = '£' + total;	
		
		calcTotal();
		return true;
	}
	
	function calcSingleBedroom(){
		calcItem("priceSingleBedroom", "singleBedroom", "totalSingleBedroom");
		return true;
		
	};
	
	function calcDoubleBedroom(){
		calcItem("priceDoubleBedroom", "doubleBedroom", "totalDoubleBedroom");
		return true;
	}
	
	
	function calcLounge(){
		calcItem("priceLounge", "lounge", "totalLounge");
		return true;
	}
	
	function calcStairs(){
		calcItem("priceStairs", "stairs", "totalStairs");
		return true;
	}
	
	function calcHallwayRegular(){
		calcItem("priceHallwayRegular", "hallwayRegular", "totalHallwayRegular");
		return true;
	}
		
	function calcSmallRug(){
		calcItem("priceSmallRug", "smallRug", "totalSmallRug");
		return true;
	}
	
	function calcLargeRug(){
		calcItem("priceLargeRug", "largeRug", "totalLargeRug");
		return true;
	}
	
	
	function calcTwoSeatSofa(){
		calcItem("priceTwoSeatSofa", "twoSeatSofa", "totalTwoSeatSofa");
		return true;
	}
	
	function calcTreeSeatSofa(){
		calcItem("priceTreeSeatSofa", "treeSeatSofa", "totalTreeSeatSofa");
		return true;
	}
	
	function calcFabricArmchair(){
		calcItem("priceFabricArmchair", "fabricArmchair", "totalFabricArmchair");
		return true;
	}
		
	function calcShortPairOfCurtains(){
		calcItem("priceShortPairOfCurtains", "shortPairOfCurtains", "totalShortPairOfCurtains");
		return true;
	}
	function calcLongPairOfCurtains(){
		calcItem("priceLongPairOfCurtains", "longPairOfCurtains", "totalLongPairOfCurtains");
		return true;
	}
	
	function calcSingleMattress(){
		calcItem("priceSingleMattress", "singleMattress", "totalSingleMattress");
		return true;
	}
	
	function calcDoubleMattress(){
		calcItem("priceDoubleMattress", "doubleMattress", "totalDoubleMattress");
		return true;
	}
	
	function calcRegularCleaning(){
		calcItem("priceRegularCleaning", "regularCleaning", "totalRegularCleaning");
		return true;
	}
	
	function calcDeepCleaning(){
		calcItem("priceDeepCleaning", "deepCleaning", "totalDeepCleaning");
		return true;
	}
	
	function calcOvenCleaning(){
		calcItem("priceOvenCleaning", "ovenCleaning", "totalOvenCleaning");
		return true;
	}
	
	function calcMicrowave(){
		calcItem("priceMicrowave", "microwave", "totalMicrowave");
		return true;
	}
	
	function calcHob(){
		calcItem("priceHob", "hob", "totalHob");
		return true;
	}
	
	function calcEndOfTenancy(){
		calcItem("priceEndOfTenancy", "endOfTenancy", "totalEndOfTenancy");
		return true;
	}
	
	function clearTotal(){
		var totals = ["totalSingleBedroom", "totalDoubleBedroom", "totalLounge", 
					"totalStairs", "totalHallwayRegular", "totalSmallRug", 
					"totalLargeRug", "totalTwoSeatSofa", "totalTreeSeatSofa", 
					"totalFabricArmchair", "totalShortPairOfCurtains","totalLongPairOfCurtains", 
					"totalSingleMattress", "totalDoubleMattress", "totalRegularCleaning", 
					"totalDeepCleaning", "totalOvenCleaning", "totalMicrowave",
					"totalHob", "totalEndOfTenancy"];
		
		var cnts = ["singleBedroom", "doubleBedroom", "lounge", 
				"stairs", "hallwayRegular", "smallRug", 
				"largeRug", "twoSeatSofa", "treeSeatSofa", 
				"fabricArmchair", "shortPairOfCurtains", "longPairOfCurtains", 
				"singleMattress", "doubleMattress", "regularCleaning",
				"deepCleaning", "ovenCleaning", "microwave",
				"hob", "endOfTenancy"];
		
		for (i = 0; i < cnts.length; i++) { 
			document.getElementById(cnts[i]).value = "";
		}
		var total = 0;
		var discount = 0;
		for (i = 0; i < totals.length; i++) { 
			document.getElementById(totals[i]).value = '£' + total;
		}
		document.getElementById("result").value = '£' + total;
		document.getElementById("hiddenResult").value = total;
		if (total >= 250)
			discount = Number(((20 / 100) * total).toFixed(2));
		
		document.getElementById("discount").value = '£' + discount;
		document.getElementById("hiddenDiscount").value = discount;
		document.getElementById("totalWithDiscount").value = '£' + (total - discount);
		document.getElementById("hiddenTotalWithDiscount").value = (total - discount);
	};
	
	