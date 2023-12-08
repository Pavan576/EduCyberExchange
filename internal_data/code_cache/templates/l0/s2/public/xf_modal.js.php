<?php
// FROM HASH: af7e8a81e4b47722da2e5b96abd35888
return array(
'code' => function($__templater, array $__vars, $__extensions = null)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<script>
window.addEventListener("load", function() {
    const preloader = document.querySelector(".preloader");
    setTimeout(function() {
        preloader.style.opacity = "0"; // Set opacity to 0 for fade-out effect
        document.body.style.filter = "blur(0px)"; // Reset the blur to 0px
        setTimeout(function() {
            preloader.style.display = "none"; // Hide the preloader after fade-out
        }, 500); // Adjust the time to match the transition duration (0.5 seconds)
    }, 5000); // Adjust the delay in milliseconds (e.g., 2000 for a 2-second delay)
});

</script>';
	return $__finalCompiled;
}
);