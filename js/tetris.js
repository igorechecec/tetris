$(document).ready(function() {
	
var it = Math.floor(Math.random()* 7) + 1;
var maxRow = 24;
var maxCol = 14;
var rw=2, 
	col=7;
var gameOver = false;

/**
 * this function help us to find cells in simple way,
 * you must enter number of row and column without class name
 * 
 * @param  {[int]} rw  [row number]
 * @param  {[int]} col [column number]
 * @return {[string]}     [string which mean class of cell ]
 */
function pos(rw, col){
	this.rw = rw;
	this.col = col;

	var row = ".row-" + rw;
	var column = ".column-" + col;
	
	var position = row + " " + column;

	return position;
};



/*----------------------------------------------------------------------------*/
/*----------------------------------figures-----------------------------------*/
/*____________________________________________________________________________*/
/*line*/
var f1 = {
			position:
			[
				[pos(rw-1, col), pos(rw, col), pos(rw+1, col), pos(rw+2, col)],
				[pos(rw, col-1), pos(rw, col), pos(rw, col+1), pos(rw, col+2)]
			],
			colorClass: "active1"
		};

/*cube*/	
var f2 = {
			position:
			[
				[pos(rw-1, col), pos(rw, col), pos(rw-1, col+1), pos(rw, col+1)]
			],
			colorClass: "active2"
		};

/*L-form*/
var f3 = {
			position:
			[
				[pos(rw-1, col), pos(rw, col), pos(rw+1, col), pos(rw+1, col+1)],
				[pos(rw+1, col-1), pos(rw, col-1), pos(rw, col), pos(rw, col+1)],
				[pos(rw-1, col), pos(rw-1, col+1), pos(rw, col+1), pos(rw+1, col+1)],			
				[pos(rw+1, col-1), pos(rw+1, col), pos(rw+1, col+1), pos(rw, col+1)]
			],
			colorClass: "active3"
		};

/*L-form, mirror reflection*/	
var	f4 = { 
			position:
			[	
				[pos(rw-1, col+1), pos(rw, col+1), pos(rw+1, col+1), pos(rw+1, col)],
				[pos(rw, col-1), pos(rw+1, col-1), pos(rw+1, col), pos(rw+1, col+1)],
				[pos(rw-1, col), pos(rw, col), pos(rw+1, col), pos(rw-1, col+1)],
				[pos(rw-1, col-1), pos(rw-1, col), pos(rw-1, col+1), pos(rw, col+1)]
			],
			colorClass: "active4"
		};

/*t-form*/
var f5 = { 
			position:
			[
				[pos(rw-1, col), pos(rw, col), pos(rw+1, col), pos(rw, col+1)],
				[pos(rw, col-1), pos(rw, col), pos(rw, col+1), pos(rw+1, col)],
				[pos(rw-1, col), pos(rw, col), pos(rw, col-1), pos(rw+1, col)],
				[pos(rw-1, col), pos(rw, col), pos(rw, col-1), pos(rw, col+1)]
			],
			colorClass: "active5"
		};

/*r-form*/	
var f6 = {  
			position:
			[
				[pos(rw-1,col), pos(rw, col), pos(rw, col+1), pos(rw+1, col+1)],
				[pos(rw+1, col-1), pos(rw+1, col), pos(rw, col), pos(rw, col+1)]
			],
			colorClass: "active6"
		};

/*r-form, mirror reflection*/
var	f7 = {  
			position: 
			[
				[pos(rw-1, col+1), pos(rw, col+1), pos(rw, col), pos(rw+1, col)],
				[pos(rw, col-1), pos(rw, col), pos(rw+1, col), pos(rw+1, col+1)]
			],
			colorClass: "active7"
		};
/*-----------------------------------------------------------------------------*/
/*---------------------------End of figures------------------------------------*/
/*_____________________________________________________________________________*/


function figureSel(it){
	this.it = it;

	return "f" + it;
};

function newRender(rw, col){
	this.rw = rw;
	this.col = col;

	for(var i = 0; i < 4; i++){
		
	} 
}










});
