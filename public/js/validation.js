$(document).ready(function() {
	$("#sendcvForm").validate({
	    rules: {
	      	name: {
	      		required: true,
	      		maxlength: 50
	      	},
	      	email: {
		        required: true,
		        email: true
	      	},
	      	phone: {
	      		number: true,
	      		maxlength: 12
	      	},
	      	cv: {
	      		required: true,
	      		extension: "doc|pdf|xls|xlsx",
	      		maxFileSize: {
                    "unit": "MB",
                    "size": 2
                },
	      	},
	      	invitation: {
	      		maxlength: 3000
	      	}
	    },

	    messages: {
	      	name: {
	      		required: "Tên không được để trống",
	      		maxlength: "Tên không được dài quá 50 kí tự"
	      	},
	      	email: {
		      	required: "Email không được để trống",
		      	email: "Vui lòng nhập đúng định dạng email"
		    },
		    phone : {
		    	number: "Số điện thoại không đúng",
		    	maxlength: "Số điện thoại không quá 12 chữ số"
		    },
		    cv : {
		    	required : "Vui lòng đính kèm hồ sơ",
		    	extension: "Định dạng file chưa đúng",
		    	maxFileSize: "File không được quá 2MB"
		    },
		    invitation : {
		    	maxlength: "Không nhập quá 3000 kí tự"
		    }
	    }
 	});

 	fileSizeToBytes = (function () {

        var units = ["B", "KB", "MB", "GB", "TB"];

        return function (size, unit) {

            var index_of_unit = units.indexOf(unit),
                coverted_size;

            if (index_of_unit === -1) {

                coverted_size = false;

            } else {

                while (index_of_unit > 0) {
                    size *= 1024;
                    index_of_unit -= 1;
                }

                coverted_size = size;
            }

            return coverted_size;
        };
    }());

    $.validator.addMethod(
        "maxFileSize",
        function (value, element, params) {

            var files,
                unit = params.unit || "KB",
                size = params.size || 100,
                max_file_size = fileSizeToBytes(size, unit),
                is_valid = false;

            if (this.optional(element)) {

                is_valid = true;

            } else {

                files = element.files;

                if (files.length < 1) {

                    is_valid = false;

                } else {

                    is_valid = files[0].size <= max_file_size;

                }
            }

            return is_valid;
        }
    );
});

