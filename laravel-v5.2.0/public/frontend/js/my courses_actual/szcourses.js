define(function(require){require("common"),require("./u_common.js"),$(".share-box .show-btn").on("mouseenter",function(){var a=$(this),h=a.parent();h.hasClass("hover")||h.addClass("hover")}).on("mouseleave",function(e){e.stopPropagation();var a=$(this),h=a.parent();h.hasClass("hover")&&h.removeClass("hover")}),$(".share-box .share-box-con").on("mouseenter",function(){var a=$(this),h=a.parent();h.hasClass("hover")||h.addClass("hover")}).on("mouseleave",function(e){if(e.stopPropagation(),$(e.target).hasClass("share-box-con")){var a=$(this),h=a.parent();h.hasClass("hover")&&h.removeClass("hover")}})});