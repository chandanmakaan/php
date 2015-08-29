<script>
var templatePath = 'test.marko';
var re = new RegExp("/^([a-z]+.marko)/");
if (re.test(templatePath)) {
	console.log("Valid");
} else {
	console.log("Invalid");
}

</script>
