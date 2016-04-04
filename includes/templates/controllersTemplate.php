<div class='wrapper'>
	
	<section id="subControllerSection">
		
		<h3>Sub-Controller Configuration</h3>
		
		<!-- CLASS -->
		<div id="subControllerClassSection">
			<h4>Class</h4>
			<code>class "sub"Controller { }</code>
			<p>Replace the sub with the main directory you want to use. In this example
				the word <i>controller</i> is used. It can be whatever you wish, but...<br/>
				<strong>Must be:</strong>
				<ul>
					<li>a-z Characters only</li>
					<li>Lowercase</li>
				</ul>
			</p>
		</div>
		
		<!-- VARIABLES -->
		<div id="subControllerClassVariablesSection">
			<h4>Class Variables</h4>
			
			<!-- $model -->
			<code>private $model;</code>
			<p>This is the call to the model that is made in the sub-model constructor.
			</p>
			
			<!-- $view -->
			<code>private $view;</code>
			<p>This is the call to the view that is made in the sub-model constructor.
			</p>
		</div>
		
		
		<!-- CONSTRUCTOR -->
		<div id="subControllerConstructorSection">
			<h4>Constructor</h4>
			
			<code>public funcion __construct() { }</code>
			<p>This is called on page load. This determines access to content based on
				the parameters given using <code>if (isset()) { }</code>.<br/>
				<strong>Can be used to control access for:</strong>
				<ul>
					<li>Sessions</li>
					<li>URL Parameters</li>
					<li>Cookies</li>
					<li>And others in similar suit</li>
				</ul>
			</p>
			
		</div>
		
		
		<!-- GLOBALS -->
		<div id="subControllerConstructorSection">
			<h4>Constructor</h4>
			
			<!-- $url -->
			<code>global $url;</code>
			<p>This is what is used to determine URL 
			</p>
			
		</div>
		
		
		
	</section>
	
	<section id="mainControllerSection">
		
		<h3>Main Controller Design</h3>
		
	</section>
	
</div>
