<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Tetris</title>
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/jquery-2.2.2.js"></script>
	<script src="/js/tetris.js"></script>

</head>
<body>

	<div class="container">
		<div class="gameboard">
			<table>
				<tr class="row-1">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-2">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-3">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-4">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-5">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-6">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-7">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-8">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-9">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-10">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-11">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-12">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-13">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-14">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-15">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-16">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-17">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-18">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-19">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-20">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-21">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-22">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-23">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
				<tr class="row-24">
					<td class="column-1"></td>
					<td class="column-2"></td>
					<td class="column-3"></td>
					<td class="column-4"></td>
					<td class="column-5"></td>
					<td class="column-6"></td>
					<td class="column-7"></td>
					<td class="column-8"></td>
					<td class="column-9"></td>
					<td class="column-10"></td>
					<td class="column-11"></td>
					<td class="column-12"></td>
					<td class="column-13"></td>
					<td class="column-14"></td>
				</tr>
			</table>
		</div>
		<div class="next-container">
			<div class="next"></div>
		</div>
		<div class="record-container">
			<div class="record"></div>
		</div>
	</div>

</body>
</html>