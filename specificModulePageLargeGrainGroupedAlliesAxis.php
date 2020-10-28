<?php
// Ruth Shaffer
// Start session, and create visualization
// Organization ideas from Yusuf Shakeel (Youtube / Chart.js) 

session_start();
$page_title = "Large Grain: Allies and Axis";
$css_reference = "assets/css/tests_IndividualPages.css";
include("includes/header.php");
include("includes/navigation.html");?>
<?php if (isset($_SESSION['user_id'])) { ?>
<!-- Wrapper -->
<div id="wrapper">
	<article class="item">
		<h6>
			In the legend to the left: &nbsp Click on the box next to the label to show or hide grouped data from former Allied and Axis powers. &nbsp <br>
			Mouse over the data for it's %.&nbsp&nbsp&nbsp&nbsp Please use the scroll bar at the bottom of the graph to scroll to the right for more events.
		</h6>
	</article>
	<article class="item">
		<div class="chartWrapper">
			<div class="chartAreaWrapper">
				<div class="chartAreaWrapper2">
					<canvas id="myChart">
					</canvas>
				</div>
			</div>
			<canvas id="myChartAxis" width="0">
			</canvas>
		</div>
	</article>
	</article>
	<section>
</div>
<?php
} else {//Closing the if isset statement
	echo "Please log in to view the events list data.";
};
?>
<!-- Footer -->
<?php include("includes/footer.html");?>
<!-- Scripts-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/Added_From_Other/jquery.dropotron.min.js"></script>
<script src="assets/js/Added_From_Other/init.js"></script>
<script src="node_modules/chart.js/dist/Chart.bundle.min.js"></script>
<script src="node_modules/RAS_added/linegraphLargeGrain_GroupedAlliesAxis.js"></script>
</body>
</html>
