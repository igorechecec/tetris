$(document).ready(function() {
	
var it = Math.floor(Math.random()* 7) + 1;
var maxRow = 24;
var maxCol = 14;
var rw=2, 
	col=7;
var gameOver = false;

var r,
	c;
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
				[ [r-1, c], [r, c], [r+1, c], [r+2, c] ],
				[ [r, c-1], [r, c], [r, c+1], [r, c+2] ]
			],
			colorClass: "active1"
		};

/*cube*/	
var f2 = {
			position:
			[
				[ [r-1, c], [r, c], [r-1, c+1], [r, c+1)] ]
			],
			colorClass: "active2"
		};

/*L-form*/
var f3 = {
			position:
			[
				[ [r-1, c], [r, c], [r+1, c], [r+1, c+1] ],
				[ [r+1, c-1], [r, c-1], [r, c], [r, c+1] ],
				[ [r-1, c], [r-1, c+1], [r, c+1], [r+1, c+1] ],			
				[ [r+1, c-1], [r+1, c], [r+1, c+1], [r, c+1] ]
			],
			colorClass: "active3"
		};

/*L-form, mirror reflection*/	
var	f4 = { 
			position:
			[	
				[ [r-1, c+1], [r, c+1], [r+1, c+1], [r+1, c] ],
				[ [r, c-1], [r+1, c-1], [r+1, c], [r+1, c+1] ],
				[ [r-1, c], [r, c], [r+1, c], [r-1, c+1] ],  
				[ [r-1, c-1], [r-1, c], [r-1, c+1], [r, c+1)] ]
			],
			colorClass: "active4"
		};

/*t-form*/
var f5 = { 
			position:
			[
				[ [r-1, c], [r, c], [r+1, c], [r, c+1] ],
				[ [r, c-1], [r, c], [r, c+1], [r+1, c] ],
				[ [r-1, c], [r, c], [r, c-1], [r+1, c] ],
				[ [r-1, c], [r, c], [r, c-1], [r, c+1] ]
			],
			colorClass: "active5"
		};

/*r-form*/	
var f6 = {  
			position:
			[
				[ [r-1,c], [r, c], [r, c+1], [r+1, c+1] ],
				[ [r+1, c-1], [r+1, c], [r, c], [r, c+1] ]
			],
			colorClass: "active6"
		};

/*r-form, mirror reflection*/
var	f7 = {  
			position: 
			[
				[ [r-1, c+1], [r, c+1], [r, c], [r+1, c] ],
				[ [r, c-1], [r, c], [r+1, c], [r+1, c+1] ]
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
};










});
