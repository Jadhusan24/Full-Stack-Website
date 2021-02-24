		    $(document).ready(function () {
		        $(".checked").click(function () {
		            var catagory = $(this).attr("id");
		            // if the catagory is all do nothing
		            if (catagory == "all") {
		                $(".product-men").addClass("hide");
		                setTimeout(function () {
		                    $(".product-men").removeClass("hide");
		                }, 300);
		            }
		            // else hide everythin except the relevant class
		            else {
		                $(".product-men").addClass("hide");
		                setTimeout(function () {
		                    $(`.product-men.${catagory}`).removeClass("hide");
		                }, 300);
		            }
		        });

		        // add to cart
		        $(".btn").click(() => alert("Item added to cart"));
		    });