<title>NAIVE BAYES DENGAN PHP</title>
	<form method = 'post' action= "index.php">
		<?php
		  	$age = [63, 37, 41, 56, 57, 57, 56, 44, 52, 57, 54, 48, 49, 64, 58, 50, 58, 66, 43, 69, 59, 44, 42, 61, 40, 71, 59, 51, 65, 53, 41, 65, 44, 54, 51, 46, 54, 54, 65, 65, 51, 48, 45, 53, 39, 52, 44, 47, 53, 53, 51, 66, 62, 44, 63, 52, 48, 45, 34, 57, 71, 54, 52, 41, 58, 35, 51, 45, 44, 62, 54, 51, 29, 51, 43, 55, 51, 59, 52, 58, 41, 45, 60, 52, 42, 67, 68, 46, 54, 58, 48, 57, 52, 54, 45, 53, 62, 52, 43, 53, 42, 59, 63, 42, 50, 68, 69, 45, 50, 50, 64, 57, 64, 43, 55, 37, 41, 56, 46, 46, 64, 59, 41, 54, 39, 34, 47, 67, 52, 74, 54, 49, 42, 41, 41, 49, 60, 62, 57, 64, 51, 43, 42, 67, 76, 70, 44, 60, 44, 42, 66, 71, 64, 66, 39, 58, 47, 35, 58, 56, 56, 55, 41, 38, 38, 67, 67, 62, 63, 53, 56, 48, 58, 58, 60, 40, 60, 64, 43, 57, 55, 65, 61, 58, 50, 44, 60, 54, 50, 41, 51, 58, 54, 60, 60, 59, 46, 67, 62, 65, 44, 60, 58, 68, 62, 52, 59, 60, 49, 59, 57, 61, 39, 61, 56, 43, 62, 63, 65, 48, 63, 55, 65, 56, 54, 70, 62, 35, 59, 64, 47, 57, 55, 64, 70, 51, 58, 60, 77, 35, 70, 59, 64, 57, 56, 48, 56, 66, 54, 69, 51, 43, 62, 67, 59, 45, 58, 50, 62, 38, 66, 52, 53, 63, 54, 66, 55, 49, 54, 56,46, 61, 67, 58, 47, 52, 58, 57, 58,61, 42, 52, 59, 40, 61, 46, 59, 57, 57, 55, 61, 58, 58, 67, 44, 63, 63, 59, 57, 45, 68,57, 57];
			$sex = [1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 0];
			$cp = [3, 2, 1, 1, 0, 0, 1, 1, 2, 2, 0, 2, 1, 3, 3, 2, 2, 3, 0, 3, 0, 2, 0, 2, 3, 1, 2, 2, 2, 2, 1, 0, 1, 2, 3, 2, 2, 2, 2, 2, 2, 1, 0, 0, 2, 1, 2, 2, 2, 0, 2, 0, 2, 2, 2, 1, 0, 0, 3, 0, 2, 1, 3, 1, 2, 0, 2, 1, 1, 0, 2, 2, 1, 0, 2, 1, 2, 1, 1, 2, 2, 1, 2, 3, 0, 2, 2, 1, 2, 0, 2, 0, 2, 1, 1, 0, 0, 0, 2, 2, 3, 3, 1, 2, 2, 2, 3, 0, 1, 0, 0, 2, 2, 0, 1, 2, 2, 3, 1, 0, 0, 0, 2, 2, 2, 1, 0, 2, 2, 1, 2, 1, 1, 1, 1, 0, 2, 1, 0, 0, 2, 0, 2, 0, 2, 1, 2, 3, 2, 2, 0, 0, 3, 2, 2, 0, 2, 1, 1, 1, 1, 1, 1, 2, 2, 0, 0, 0, 0, 0, 2, 1, 1, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 2, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 3, 0, 0, 0, 1, 0, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 1, 2, 0, 0, 0, 0, 3, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 0, 0, 0, 3, 1, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 3, 0, 0, 1];
			$trestbps = [145, 130, 130, 120, 120, 140, 140, 120, 172, 150, 140, 130, 130, 110, 150, 120, 120, 150, 150, 140, 135, 130, 140, 150, 140, 160, 150, 110, 140, 130, 105, 120, 130, 125, 125, 142, 135, 150, 155, 160, 140, 130, 104, 130, 140, 120, 140, 138, 128, 138, 130, 120, 130, 108, 135, 134, 122, 115, 118, 128, 110, 108, 118, 135, 140, 138, 100, 130, 120, 124, 120, 94, 130, 140, 122, 135, 125, 140, 128, 105, 112, 128, 102, 152, 102, 115, 118, 101, 110, 100, 124, 132, 138, 132, 112, 142, 140, 108, 130, 130, 148, 178, 140, 120, 129, 120, 160, 138, 120, 110, 180, 150, 140, 110, 130, 120, 130, 120, 105, 138, 130, 138, 112, 108, 94, 118, 112, 152, 136, 120, 160, 134, 120, 110, 126, 130, 120, 128, 110, 128, 120, 115, 120, 106, 140, 156, 118, 150, 120, 130, 160, 112, 170, 146, 138, 130, 130, 122, 125, 130, 120, 132, 120, 138, 138, 160, 120, 140, 130, 140, 130, 110, 120, 132, 130, 110, 117, 140, 120, 150, 132, 150, 130, 112, 150, 112, 130, 124, 140, 110, 130, 128, 120, 145, 140, 170, 150, 125, 120, 110, 110, 125, 150, 180, 160, 128, 110, 150, 120, 140, 128, 120, 118, 145, 125, 132, 130, 130, 135, 130, 150, 140, 138, 200, 110, 145, 120, 120, 170, 125, 108, 165, 160, 120, 130, 140, 125, 140, 125, 126, 160, 174, 145, 152, 132, 124, 134, 160, 192, 140, 140, 132, 138, 100, 160, 142, 128, 144, 150, 120, 178, 112, 123, 108, 110, 112, 180, 118, 122, 130, 120, 134, 120, 100, 110, 125, 146, 124, 136, 138, 136, 128, 126, 152, 140, 140, 134, 154, 110, 128, 148, 114, 170, 152, 120, 140, 124, 164, 140, 110, 144, 130, 130];
			$chol = [233, 250, 204, 236, 354, 192, 294, 263, 199, 168, 239, 275, 266, 211, 283, 219, 340, 226, 247, 239, 234, 233, 226, 243, 199, 302, 212, 175, 417, 197, 198, 177, 219, 273, 213, 177, 304, 232, 269, 360, 308, 245, 208, 264, 321, 325, 235, 257, 216, 234, 256, 302, 231, 141, 252, 201, 222, 260, 182, 303, 265, 309, 186, 203, 211, 183, 222, 234, 220, 209, 258, 227, 204, 261, 213, 250, 245, 221, 205, 240, 250, 308, 318, 298, 265, 564, 277, 197, 214, 248, 255, 207, 223, 288, 160, 226, 394, 233, 315, 246, 244, 270, 195, 240, 196, 211, 234, 236, 244, 254, 325, 126, 313, 211, 262, 215, 214, 193, 204, 243, 303, 271, 268, 267, 199, 210, 204, 277, 196, 269, 201, 271, 295, 235, 306, 269, 178, 208, 201, 263, 295, 303, 209, 223, 197, 245, 242, 240, 226, 180, 228, 149, 227, 278, 220, 197, 253, 192, 220, 221, 240, 342, 157, 175, 175, 286, 229, 268, 254, 203, 256, 229, 284, 224, 206, 167, 230, 335, 177, 276, 353, 225, 330, 230, 243, 290, 253, 266, 233, 172, 305, 216, 188, 282, 185, 326, 231, 254, 267, 248, 197, 258, 270, 274, 164, 255, 239, 258, 188, 177, 229, 260, 219, 307, 249, 341, 263, 330, 254, 256, 407, 217, 282, 288, 239, 174, 281, 198, 288, 309, 243, 289, 289, 246, 322, 299, 300, 293, 304, 282, 269, 249, 212, 274, 184, 274, 409, 246, 283, 254, 298, 247, 294, 299, 273, 309, 259, 200, 244, 231, 228, 230, 282, 269, 206, 212, 327, 149, 286, 283, 249, 234, 237, 234, 275, 212, 218, 261, 319, 166, 315, 204, 218, 223, 207, 311, 204, 232, 335, 205, 203, 318, 225, 212, 169, 187, 197, 176, 241, 264, 193, 131, 236];
			$fbs = [1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0];
			$restecg = [0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 2, 0, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 2, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 2, 1, 2, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1, 0];
			$thalach = [150, 187, 172, 178, 163, 148, 153, 173, 162, 174, 160, 139, 171, 144, 162, 158, 172, 114, 171, 151, 161, 179, 178, 137, 178, 162, 157, 123, 157, 152, 168, 140, 188, 152, 125, 160, 170, 165, 148, 151, 142, 180, 148, 143, 182, 172, 180, 156, 115, 160, 149, 151, 146, 175, 172, 158, 186, 185, 174, 159, 130, 156, 190, 132, 165, 182, 143, 175, 170, 163, 147, 154, 202, 186, 165, 161, 166, 164, 184, 154, 179, 170, 160, 178, 122, 160, 151, 156, 158, 122, 175, 168, 169, 159, 138, 111, 157, 147, 162, 173, 178, 145, 179, 194, 163, 115, 131, 152, 162, 159, 154, 173, 133, 161, 155, 170, 168, 162, 172, 152, 122, 182, 172, 167, 179, 192, 143, 172, 169, 121, 163, 162, 162, 153, 163, 163, 96, 140, 126, 105, 157, 181, 173, 142, 116, 143, 149, 171, 169, 150, 138, 125, 155, 152, 152, 131, 179, 174, 144, 163, 169, 166, 182, 173, 173, 108, 129, 160, 147, 155, 142, 168, 160, 173, 132, 114, 160, 158, 120, 112, 132, 114, 169, 165, 128, 153, 144, 109, 163, 158, 142, 131, 113, 142, 155, 140, 147, 163, 99, 158, 177, 141, 111, 150, 145, 161, 142, 157, 139, 162, 150, 140, 140, 146, 144, 136, 97, 132, 127, 150, 154, 111, 174, 133, 126, 125, 103, 130, 159, 131, 152, 124, 145, 96, 109, 173, 171, 170, 162, 156, 112, 143, 132, 88, 105, 166, 150, 120, 195, 146, 122, 143, 106, 125, 125, 147, 130, 126, 154, 182, 165, 160, 95, 169, 108, 132, 117, 126, 116, 103, 144, 145, 71, 156, 118, 168, 105, 141, 152, 125, 125, 156, 134, 181, 138, 120, 162, 164, 143, 130, 161, 140, 146, 150, 144, 144, 136, 90, 123, 132, 141, 115, 174];
			$exang = [0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 1, 0];
			$oldpeak = [2.3, 3.5, 1.4, 0.8, 0.6, 0.4, 1.3, 0, 0.5, 1.6, 1.2, 0.2, 0.6, 1.8, 1, 1.6, 0, 2.6, 1.5, 1.8, 0.5, 0.4, 0, 1, 1.4, 0.4, 1.6, 0.6, 0.8, 1.2, 0, 0.4, 0, 0.5, 1.4, 1.4, 0, 1.6, 0.8, 0.8, 1.5, 0.2, 3, 0.4, 0, 0.2, 0, 0, 0, 0, 0.5, 0.4, 1.8, 0.6, 0, 0.8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1.4, 1.2, 0.6, 0, 0, 0.4, 0, 0, 0, 0.2, 1.4, 2.4, 0, 0, 0.6, 0, 0, 0, 1.2, 0.6, 1.6, 1, 0, 1.6, 1, 0, 0, 0, 0, 0, 0, 1.2, 0.1, 1.9, 0, 0.8, 4.2, 0, 0.8, 0, 1.5, 0.1, 0.2, 1.1, 0, 0, 0.2, 0.2, 0, 0, 0, 2, 1.9, 0, 0, 2, 0, 0, 0, 0, 0.7, 0.1, 0, 0.1, 0.2, 0, 0, 0, 0, 0, 0, 0, 0, 1.5, 0.2, 0.6, 1.2, 0, 0.3, 1.1, 0, 0.3, 0.9, 0, 0, 2.3, 1.6, 0.6, 0, 0, 0.6, 0, 0, 0.4, 0, 0, 1.2, 0, 0, 0, 1.5, 2.6, 3.6, 1.4, 3.1, 0.6, 1, 1.8, 3.2, 2.4, 2, 1.4, 0, 2.5, 0.6, 1.2, 1, 0, 2.5, 2.6, 0, 1.4, 2.2, 0.6, 0, 1.2, 2.2, 1.4, 2.8, 3, 3.4, 3.6, 0.2, 1.8, 0.6, 0, 2.8, 0.8, 1.6, 6.2, 0, 1.2, 2.6, 2, 0, 0.4, 3.6, 1.2, 1, 1.2, 3, 1.2, 1.8, 2.8, 0, 4, 5.6, 1.4, 4, 2.8, 2.6, 1.4, 1.6, 0.2, 1.8, 0, 1, 0.8, 2.2, 2.4, 1.6, 0, 1.2, 0, 0, 2.9, 0, 2, 1.2, 2.1, 0.5, 1.9, 0, 0, 2, 4.2, 0.1, 1.9, 0.9, 0, 0, 3, 0.9, 1.4, 3.8, 1, 0, 2, 1.8, 0, 0.1, 3.4, 0.8, 3.2, 1.6, 0.8, 2.6, 1, 0.1, 1, 1, 2, 0.3, 0, 3.6, 1.8, 1, 2.2, 0, 1.9, 1.8, 0.8, 0, 3, 2, 0, 4.4, 2.8, 0.8, 2.8, 4, 0, 1, 0.2, 1.2, 3.4, 1.2, 0];
			$slope = [0, 0, 2, 2, 2, 1, 1, 2, 2, 2, 2, 2, 2, 1, 2, 1, 2, 0, 2, 2, 1, 2, 2, 1, 2, 2, 2, 2, 2, 0, 2, 2, 2, 0, 2, 0, 2, 2, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 2, 2, 1, 1, 2, 2, 1, 2, 2, 2, 1, 1, 1, 2, 2, 1, 2, 2, 2, 1, 1, 1, 2, 2, 1, 1, 2, 2, 2, 2, 1, 2, 1, 2, 2, 2, 2, 0, 2, 0, 2, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 2, 1, 1, 2, 2, 2, 2, 2, 2, 2, 1, 2, 2, 1, 2, 2, 2, 2, 2, 2, 1, 1, 2, 1, 1, 2, 1, 2, 1, 2, 2, 2, 2, 1, 1, 1, 1, 1, 2, 2, 1, 2, 0, 2, 2, 2, 2, 1, 1, 0, 1, 0, 1, 0, 1, 2, 1, 1, 2, 2, 1, 1, 1, 1, 2, 1, 1, 2, 2, 1, 1, 2, 1, 1, 1, 1, 1, 0, 1, 1, 1, 2, 2, 1, 2, 1, 0, 2, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 2, 1, 1, 0, 1, 2, 2, 1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 2, 1, 2, 1, 0, 2, 1, 1, 2, 1, 2, 1, 2, 2, 1, 1, 1, 1, 2, 2, 1, 2, 2, 1, 1, 2, 0, 1, 1, 0, 2, 1, 1, 1, 1, 1, 1, 1];
			$ca = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 2, 0, 4, 1, 0, 0, 0, 3, 1, 3, 2, 0, 2, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 4, 0, 0, 0, 0, 4, 4, 3, 2, 2, 1, 0, 1, 0, 0, 2, 2, 0, 2, 0, 0, 1, 1, 3, 0, 1, 0, 1, 1, 1, 1, 0, 0, 3, 1, 2, 0, 0, 0, 2, 2, 2, 1, 1, 0, 0, 3, 1, 1, 2, 3, 1, 1, 1, 0, 0, 1, 0, 1, 3, 1, 2, 3, 0, 1, 2, 1, 0, 1, 0, 0, 0, 0, 3, 1, 1, 3, 0, 2, 2, 3, 0, 1, 0, 2, 1, 1, 0, 2, 3, 1, 3, 3, 4, 3, 2, 0, 3, 2, 0, 0, 0, 2, 1, 2, 2, 1, 1, 0, 3, 2, 0, 0, 2, 0, 1, 1, 2, 1, 0, 2, 1, 0, 0, 1, 0, 1, 2, 2, 1, 1, 1, 1, 3, 2, 0, 0, 2, 0, 2, 0, 0, 2, 1, 1];
			$thal = [1, 2, 2, 2, 2, 1, 2, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2, 2, 3, 2, 2, 2, 2, 2, 2, 3, 2, 2, 2, 2, 2, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 0, 2, 2, 2, 3, 2, 2, 2, 2, 2, 2, 2, 2, 3, 1, 1, 2, 2, 2, 2, 2, 2, 3, 3, 2, 2, 2, 2, 2, 2, 2, 3, 2, 2, 2, 3, 2, 3, 3, 3, 2, 2, 2, 3, 2, 2, 2, 3, 2, 3, 2, 2, 2, 3, 2, 3, 2, 2, 2, 2, 2, 2, 2, 3, 3, 3, 2, 2, 2, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 2, 3, 2, 2, 2, 2, 2, 3, 3, 2, 2, 2, 2, 2, 2, 3, 2, 3, 3, 1, 3, 2, 3, 3, 3, 3, 2, 3, 1, 3, 3, 2, 3, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 2, 3, 3, 1, 2, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 3, 3, 3, 3, 3, 2, 3, 3, 2, 2, 3, 3, 3, 2, 3, 3, 2, 1, 3, 1, 3, 3, 1, 3, 3, 3, 3, 2, 2, 2, 3, 3, 3, 2, 3, 3, 2, 3, 2, 2, 2, 2, 2, 2, 3, 3, 2, 2, 3, 2, 3, 3, 3, 2, 2, 1, 0, 1, 3, 3, 3, 2, 2, 3, 3, 3, 1, 1, 3, 1, 3, 2, 1, 3, 3, 3, 3, 2];
			$target = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
		$TP = 0;
		$FN = 0;
		$FP = 0;
		$TN = 0;
		$pXCi = 0;
		?>

		<h3><center> NAIVE BAYES DENGAN PHP</center></h3>
		<p><center> Website ini dibuat dengan tujuan untuk <br>memenuhi tugas mata kuliah Statistik Komputasi</center></p>
			
		<table border="1" align="center">
			<tr>
				<th>No.</th>
			   	<th>age</th>
			   	<th>sex</th>
			   	<th>cp</th>
			   	<th>trestbps</th>
				<th>chol</th>
				<th>fbs</th>
				<th>restecg</th>
				<th>thalach</th>
				<th>exang</th>
				<th>oldpeak</th>
				<th>slope</th>
				<th>ca</th>
				<th>thal</th>
				<th>target</th>
			</tr>
				
			<?php
				for ($a = 0; $a < count($target); $a++) {
					$b = $a + 1;
					echo "
						<tr>
							<th><center>$b</th>
							<td><center>$age[$a]</td>
							<td><center>$sex[$a]</td>
							<td><center>$cp[$a]</td>
							<td><center>$trestbps[$a]</td>
							<td><center>$chol[$a]</td>
							<td><center>$fbs[$a]</td>
							<td><center>$restecg[$a]</td>
							<td><center>$thalach[$a]</td>
							<td><center>$exang[$a]</td>
							<td><center>$oldpeak[$a]</td>
							<td><center>$slope[$a]</td>
							<td><center>$ca[$a]</td>
							<td><center>$thal[$a]</td>
							<td><center>$target[$a]</td>
						</tr>
					";
				}
			?>

		</table>
		<br>


		age = Umur<br>
		sex(1 = Laki2; 0 = Perempuan)<br>
		cp = Penyakit dada<br>
		trestbps = Tekanan dada saat istirahat<br>
		chol = Kolesterol<br>
		fbs = Gula darah setelah berpuasa<br>
		restecg = Hasil keabnormalan elektrodiagrafi<br>
		thalach = Jumlah detak jantung tertinggi<br>
		exang = Ketika olahraga apakah terdapat induksi angina<br>
		oldpeak = Uji stress test Terinduksi oleh kegiatan (Kardio)<br>
		slope = Segmen kemiringan saat uji stress<br>
		ca = Jumlah kapal utama saat di x ray<br>
		thal = Uji kecacatan seseorang<br>
		target = 1 or 0<br>
		<br>
		<br>

		<table border='1' align='center'>
			<tr>
				<th colspan='14'>DATA TESTING</th>
			</tr>

			<tr>
				<th>age</th>
			   	<th>sex</th>
			   	<th>cp</th>
			   	<th>trestbps</th>
				<th>chol</th>
				<th>fbs</th>
				<th>restecg</th>
				<th>thalach</th>
				<th>exang</th>
				<th>oldpeak</th>
				<th>slope</th>
				<th>ca</th>
				<th>thal</th>
				<th>target</th>
			</tr>
					
			<tr>
				<td>
					<input type='text' name='DT1' placeholder='Masukkan Nilai'>
      			</td>
					
				<td>			
				<select class='opt' name='DT2'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
					</select>
				</td>
								
				<td>
					<select class='opt' name='DT3'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
			        	<option value=2>2</option>
			        	<option value=3>3</option>
					</select>
	      		</td>
								
				<td>
					<input type='text' name='DT4' placeholder='Masukkan Nilai'>
	      		</td>

	      		<td>
					<input type='text' name='DT5' placeholder='Masukkan Nilai'>
	      		</td>

	      		<td>
					<select class='opt' name='DT6'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
					</select>
	      		</td>

	      		<td>
					<select class='opt' name='DT7'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
			        	<option value=2>2</option>
					</select>
	      		</td>

	      		<td>
					<input type='text' name='DT8' placeholder='Masukkan Nilai'>
	      		</td>

	      		<td>
					<select class='opt' name='DT9'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
					</select>
	      		</td>

	      		<td>
					<input type='text' name='DT10' placeholder='Masukkan Nilai'>
	      		</td>

	      		<td>
					<select class='opt' name='DT11'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
			        	<option value=2>2</option>
					</select>
	      		</td>

	      		<td>
					<select class='opt' name='DT12'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
			        	<option value=2>2</option>
			        	<option value=3>3</option>
					</select>
	      		</td>

	      		<td>
					<select class='opt' name='DT13'>
			        	<option value=0>0</option>
			        	<option value=1>1</option>
			        	<option value=2>2</option>
			        	<option value=3>3</option>
					</select>
	      		</td>

	      		<td><center>???</center></td>

			</tr>	
		</table>

		<br>
			<center>
				<input type='submit' name='hitung' value='Hitung'class='tombol'>
			</center>
		</center>
			
		<?php
			$banyakdata = count($target);
			$banyakdata_a = 0;
			$banyakdata_b = 0;
			$banyakdata_a_a = 0;
			$banyakdata_a_b = 0;
			$banyakdata_a_c = 0;
			$banyakdata_a_d = 0;
			$banyakdata_a_e = 0;
			$banyakdata_a_f = 0;
			$banyakdata_a_g = 0;
			$banyakdata_a_h = 0;
			$banyakdata_a_i = 0;
			$banyakdata_a_j = 0;
			$banyakdata_a_k = 0;
			$banyakdata_a_l = 0;
			$banyakdata_a_m = 0;
			$banyakdata_a_n = 0;
			$banyakdata_b_a = 0;
			$banyakdata_b_b = 0;
			$banyakdata_b_c = 0;
			$banyakdata_b_d = 0;
			$banyakdata_b_e = 0;
			$banyakdata_b_f = 0;
			$banyakdata_b_g = 0;
			$banyakdata_b_h = 0;
			$banyakdata_b_i = 0;
			$banyakdata_b_j = 0;
			$banyakdata_b_k = 0;
			$banyakdata_b_l = 0;
			$banyakdata_b_m = 0;
			$banyakdata_b_n = 0;
			$DT_a = 'tidak terkena penyakit jantung';
			$DT_b = 'terkena penyakit jantung';

			if(isset($_POST['hitung'])){
				$DT1 = $_POST['DT1'];
				$DT2 = $_POST['DT2'];
				$DT3 = $_POST['DT3'];
				$DT4 = $_POST['DT4'];
				$DT5 = $_POST['DT5'];
				$DT6 = $_POST['DT6'];
				$DT7 = $_POST['DT7'];
				$DT8 = $_POST['DT8'];
				$DT9 = $_POST['DT9'];
				$DT10 = $_POST['DT10'];
				$DT11 = $_POST['DT11'];
				$DT12 = $_POST['DT12'];
				$DT13 = $_POST['DT13'];

				for ($a = 0; $a < count($target); $a++)	{
					if ($target[$a] == 0){
						$banyakdata_a++;
						if ($age[$a] == $DT1) $banyakdata_a_a++;
						if ($sex[$a] == $DT2) $banyakdata_a_b++;
						if ($cp[$a] == $DT3) $banyakdata_a_c++;
						if ($trestbps[$a] == $DT4) $banyakdata_a_d++;
						if ($chol[$a] == $DT5) $banyakdata_a_e++;
						if ($fbs[$a] == $DT6) $banyakdata_a_f++;
						if ($restecg[$a] == $DT7) $banyakdata_a_g++;
						if ($thalach[$a] == $DT8) $banyakdata_a_h++;
						if ($exang[$a] == $DT9) $banyakdata_a_i++;
						if ($oldpeak[$a] == $DT10) $banyakdata_a_j++;
						if ($slope[$a] == $DT11)$banyakdata_a_k++;
						if ($ca[$a] == $DT12) $banyakdata_a_l++;
						if ($thal[$a] == $DT13) $banyakdata_a_m++;
					}
					else {
						$banyakdata_b++;
						if ($age[$a] == $DT1) $banyakdata_b_a++;
						if ($sex[$a] == $DT2) $banyakdata_b_b++;
						if ($cp[$a] == $DT3) $banyakdata_b_c++;
						if ($trestbps[$a] == $DT4) $banyakdata_b_d++;
						if ($chol[$a] == $DT5) $banyakdata_b_e++;
						if ($fbs[$a] == $DT6) $banyakdata_b_f++;
						if ($restecg[$a] == $DT7) $banyakdata_b_g++;
						if ($thalach[$a] == $DT8) $banyakdata_b_h++;
						if ($exang[$a] == $DT9) $banyakdata_b_i++;
						if ($oldpeak[$a] == $DT10) $banyakdata_b_j++;
						if ($slope[$a] == $DT11)$banyakdata_b_k++;
						if ($ca[$a] == $DT12) $banyakdata_b_l++;
						if ($thal[$a] == $DT13) $banyakdata_b_m++;
					}

					if ($banyakdata_a != 0 && $banyakdata_a_a != 0 && $banyakdata_a_b != 0 && $banyakdata_a_c != 0 && $banyakdata_a_d != 0 && $banyakdata_a_e != 0 && $banyakdata_a_f != 0 && $banyakdata_a_g != 0 && $banyakdata_a_h != 0 && $banyakdata_a_i != 0 && $banyakdata_a_j != 0 && $banyakdata_a_k != 0 && $banyakdata_a_l != 0 && $banyakdata_a_m != 0) {
						$pXCi_a = $banyakdata_a_a/$banyakdata_a * $banyakdata_a_b/$banyakdata_a * $banyakdata_a_c/$banyakdata_a * $banyakdata_a_d/$banyakdata_a * $banyakdata_a_e/$banyakdata_a * $banyakdata_a_f/$banyakdata_a * $banyakdata_a_g/$banyakdata_a * $banyakdata_a_h/$banyakdata_a * $banyakdata_a_i/$banyakdata_a * $banyakdata_a_j/$banyakdata_a * $banyakdata_a_k/$banyakdata_a * $banyakdata_a_l/$banyakdata_a * $banyakdata_a_m/$banyakdata_a;
					}
					else {
						$pXCi_a = 0;
					}
					if ($banyakdata_b != 0 && $banyakdata_b_a != 0 && $banyakdata_b_b != 0 && $banyakdata_b_c != 0 && $banyakdata_b_d != 0 && $banyakdata_b_e != 0 && $banyakdata_b_f != 0 && $banyakdata_b_g != 0 && $banyakdata_b_h != 0 && $banyakdata_b_i != 0 && $banyakdata_b_j != 0 && $banyakdata_b_k != 0 && $banyakdata_b_l != 0 && $banyakdata_b_m != 0) {
						$pXCi_b = $banyakdata_b_a/$banyakdata_b * $banyakdata_b_b/$banyakdata_b * $banyakdata_b_c/$banyakdata_b * $banyakdata_b_d/$banyakdata_b * $banyakdata_b_e/$banyakdata_b * $banyakdata_b_f/$banyakdata_b * $banyakdata_b_g/$banyakdata_b * $banyakdata_b_h/$banyakdata_b * $banyakdata_b_i/$banyakdata_b * $banyakdata_b_j/$banyakdata_b * $banyakdata_b_k/$banyakdata_b * $banyakdata_b_l/$banyakdata_b * $banyakdata_b_m/$banyakdata_b;
					}
					else {
						$pXCi_b = 0;
					}
					
					$pXCi_a_total = $pXCi_a*$banyakdata_a/$banyakdata;
					$pXCi_b_total = $pXCi_b*$banyakdata_b/$banyakdata;
				}

				if(isset($_POST['hitung'])){
					echo "
						<br> </br>
						<h3>P(Ci)</h3>
						<p>P($DT_a)  = $banyakdata_a/$banyakdata</p>
						<p>P($DT_b) = $banyakdata_b/$banyakdata</p>
						<br>
						<h3>P(X|Ci)</h3>
						<p>P($DT1 | $DT_a) = $banyakdata_a_a/$banyakdata_a</p>
						<p>P($DT1 | $DT_b) = $banyakdata_b_a/$banyakdata_b</p>
						<p>P($DT2 | $DT_a) = $banyakdata_a_b/$banyakdata_a</p>
						<p>P($DT2 | $DT_b) = $banyakdata_b_b/$banyakdata_b</p>
						<p>P($DT3 | $DT_a) = $banyakdata_a_c/$banyakdata_a</p>
						<p>P($DT3 | $DT_b) = $banyakdata_b_c/$banyakdata_b</p>
						<p>P($DT4 | $DT_a) = $banyakdata_a_d/$banyakdata_a</p>
						<p>P($DT4 | $DT_b) = $banyakdata_b_d/$banyakdata_b</p>
						<p>P($DT5 | $DT_a) = $banyakdata_a_e/$banyakdata_a</p>
						<p>P($DT5 | $DT_b) = $banyakdata_b_e/$banyakdata_b</p>
						<p>P($DT6 | $DT_a) = $banyakdata_a_f/$banyakdata_a</p>
						<p>P($DT6 | $DT_b) = $banyakdata_b_f/$banyakdata_b</p>
						<p>P($DT7 | $DT_a) = $banyakdata_a_g/$banyakdata_a</p>
						<p>P($DT7 | $DT_b) = $banyakdata_b_g/$banyakdata_b</p>
						<p>P($DT8 | $DT_a) = $banyakdata_a_h/$banyakdata_a</p>
						<p>P($DT8 | $DT_b) = $banyakdata_b_h/$banyakdata_b</p>
						<p>P($DT9 | $DT_a) = $banyakdata_a_i/$banyakdata_a</p>
						<p>P($DT9 | $DT_b) = $banyakdata_b_i/$banyakdata_b</p>
						<p>P($DT10 | $DT_a) = $banyakdata_a_j/$banyakdata_a</p>
						<p>P($DT10 | $DT_b) = $banyakdata_b_j/$banyakdata_b</p>
						<p>P($DT11 | $DT_a) = $banyakdata_a_k/$banyakdata_a</p>
						<p>P($DT11 | $DT_b) = $banyakdata_b_k/$banyakdata_b</p>
						<p>P($DT12 | $DT_a) = $banyakdata_a_l/$banyakdata_a</p>
						<p>P($DT12 | $DT_b) = $banyakdata_b_l/$banyakdata_b</p>
						<p>P($DT13 | $DT_a) = $banyakdata_a_m/$banyakdata_a</p>
						<p>P($DT13 | $DT_b) = $banyakdata_b_m/$banyakdata_b</p>
						
						<p>P(X|$DT_a) = $pXCi_a</p>
						<p>P(X|$DT_b) = $pXCi_b</p>
						<br> </br>
						<h3>P(X|Ci)*P(Ci)</h3>
						<p>P(X|$DT_a)*P($DT_a) = $pXCi_a_total</p>
						<p>P(X|$DT_b)*P($DT_b) = $pXCi_b_total</p>
					";
				};
				echo "<br><h3>Jadi, data testing yang memungkinkan adalah = ";
				if($pXCi_a_total > $pXCi_b_total){
					echo "$DT_a<br> Dengan nilai = $pXCi_a_total</h3>";
				}
				if($pXCi_a_total < $pXCi_b_total){
					echo "$DT_b<br> Dengan nilai = $pXCi_b_total</h3>";
				}
				if($pXCi_a_total == $pXCi_b_total){
					echo "Sama<br> Dengan nilai $DT_a = $pXCi_a_total<br> dan $DT_b = $pXCi_b_total</h3>";
				}
			}
		?>

		<?php

			for ($b = 0; $b < count($target); $b++) {
				$banyakdata = count($target);
				$banyakdata_a = 0;
				$banyakdata_b = 0;
				$banyakdata_a_a = 0;
				$banyakdata_a_b = 0;
				$banyakdata_a_c = 0;
				$banyakdata_a_d = 0;
				$banyakdata_a_e = 0;
				$banyakdata_a_f = 0;
				$banyakdata_a_g = 0;
				$banyakdata_a_h = 0;
				$banyakdata_a_i = 0;
				$banyakdata_a_j = 0;
				$banyakdata_a_k = 0;
				$banyakdata_a_l = 0;
				$banyakdata_a_m = 0;
				$banyakdata_a_n = 0;
				$banyakdata_b_a = 0;
				$banyakdata_b_b = 0;
				$banyakdata_b_c = 0;
				$banyakdata_b_d = 0;
				$banyakdata_b_e = 0;
				$banyakdata_b_f = 0;
				$banyakdata_b_g = 0;
				$banyakdata_b_h = 0;
				$banyakdata_b_i = 0;
				$banyakdata_b_j = 0;
				$banyakdata_b_k = 0;
				$banyakdata_b_l = 0;
				$banyakdata_b_m = 0;
				$banyakdata_b_n = 0;
				$DT_a = 'tidak terkena penyakit jantung';
				$DT_b = 'terkena penyakit jantung';

					for ($a = 0; $a < count($target); $a++) {
						if ($sex[$a] == 0){
							$banyakdata_a++;
							if ($age[$a] == $age[$b]) $banyakdata_a_a++;
							if ($sex[$a] == $sex[$b]) $banyakdata_a_b++;
							if ($cp[$a] == $cp[$b]) $banyakdata_a_c++;
							if ($trestbps[$a] == $trestbps[$b]) $banyakdata_a_d++;
							if ($chol[$a] == $chol[$b]) $banyakdata_a_e++;
							if ($fbs[$a] == $fbs[$b]) $banyakdata_a_f++;
							if ($restecg[$a] == $restecg[$b]) $banyakdata_a_g++;
							if ($thalach[$a] == $thalach[$b]) $banyakdata_a_h++;
							if ($exang[$a] == $exang[$b]) $banyakdata_a_i++;
							if ($oldpeak[$a] == $oldpeak[$b]) $banyakdata_a_j++;
							if ($slope[$a] == $slope[$b]) $banyakdata_a_k++;
							if ($ca[$a] == $ca[$b]) $banyakdata_a_l++;
							if ($thal[$a] == $thal[$b]) $banyakdata_a_m++;
							if ($target[$a] == $target[$b]) $banyakdata_a_n++;
						}
						else {
							$banyakdata_b++;
							if ($age[$a] == $age[$b]) $banyakdata_b_a++;
							if ($sex[$a] == $sex[$b]) $banyakdata_b_b++;
							if ($cp[$a] == $cp[$b]) $banyakdata_b_c++;
							if ($trestbps[$a] == $trestbps[$b]) $banyakdata_b_d++;
							if ($chol[$a] == $chol[$b]) $banyakdata_b_e++;
							if ($fbs[$a] == $fbs[$b]) $banyakdata_b_f++;
							if ($restecg[$a] == $restecg[$b]) $banyakdata_b_g++;
							if ($thalach[$a] == $thalach[$b]) $banyakdata_b_h++;
							if ($exang[$a] == $exang[$b]) $banyakdata_b_i++;
							if ($oldpeak[$a] == $oldpeak[$b]) $banyakdata_b_j++;
							if ($slope[$a] == $slope[$b]) $banyakdata_b_k++;
							if ($ca[$a] == $ca[$b]) $banyakdata_b_l++;
							if ($thal[$a] == $thal[$b]) $banyakdata_b_m++;
						}

						if ($banyakdata_a != 0 && $banyakdata_a_a != 0 && $banyakdata_a_b != 0 && $banyakdata_a_c != 0 && $banyakdata_a_d != 0 && $banyakdata_a_e != 0 && $banyakdata_a_f != 0 && $banyakdata_a_g != 0 && $banyakdata_a_h != 0 && $banyakdata_a_i != 0 && $banyakdata_a_j != 0 && $banyakdata_a_k != 0 && $banyakdata_a_l != 0 && $banyakdata_a_m != 0) {
							$pXCi_a = $banyakdata_a_a/$banyakdata_a * $banyakdata_a_b/$banyakdata_a * $banyakdata_a_c/$banyakdata_a * $banyakdata_a_d/$banyakdata_a * $banyakdata_a_e/$banyakdata_a * $banyakdata_a_f/$banyakdata_a * $banyakdata_a_g/$banyakdata_a * $banyakdata_a_h/$banyakdata_a * $banyakdata_a_i/$banyakdata_a * $banyakdata_a_j/$banyakdata_a * $banyakdata_a_k/$banyakdata_a * $banyakdata_a_l/$banyakdata_a * $banyakdata_a_m/$banyakdata_a;
						}
						else {
							$pXCi_a = 0;
						}
						if ($banyakdata_b != 0 && $banyakdata_b_a != 0 && $banyakdata_b_b != 0 && $banyakdata_b_c != 0 && $banyakdata_b_d != 0 && $banyakdata_b_e != 0 && $banyakdata_b_f != 0 && $banyakdata_b_g != 0 && $banyakdata_b_h != 0 && $banyakdata_b_i != 0 && $banyakdata_b_j != 0 && $banyakdata_b_k != 0 && $banyakdata_b_l != 0 && $banyakdata_b_m != 0) {
							$pXCi_b = $banyakdata_b_a/$banyakdata_b * $banyakdata_b_b/$banyakdata_b * $banyakdata_b_c/$banyakdata_b * $banyakdata_b_d/$banyakdata_b * $banyakdata_b_e/$banyakdata_b * $banyakdata_b_f/$banyakdata_b * $banyakdata_b_g/$banyakdata_b * $banyakdata_b_h/$banyakdata_b * $banyakdata_b_i/$banyakdata_b * $banyakdata_b_j/$banyakdata_b * $banyakdata_b_k/$banyakdata_b * $banyakdata_b_l/$banyakdata_b * $banyakdata_b_m/$banyakdata_b;
						}
						else {
							$pXCi_b = 0;
						}
						
						$pXCi_a_total = $pXCi_a*$banyakdata_a/$banyakdata;
						$pXCi_b_total = $pXCi_b*$banyakdata_b/$banyakdata;
					}

					if($pXCi_a_total > $pXCi_b_total){
						$pXCi = $DT_a;
					}
					if($pXCi_a_total < $pXCi_b_total){
						$pXCi = $DT_b;
					}

					if($pXCi == "tidak terkena penyakit jantung" && $target[$b] == 0){
						$TP++;
					}
					if($pXCi == "tidak terkena penyakit jantung" && $target[$b] == 1){
						$FN++;
					}
					if($pXCi == "terkena penyakit jantung" && $target[$b] == 0){
						$FP++;
					}
					if($pXCi == "terkena penyakit jantung" && $target[$b] == 1){
						$TN++;
					}
				}
				$hasil_akurasi = ($TP+$TN)/($TP+$TN+$FP+$FN);
				$hasil_presisi = ($TP)/($FP+$TP);
				$hasil_recall = ($TP)/($FN+$TP);
		?>

			<br>
			<h3><center>Confusion Matrix</center></h3>
			<table border="1" align="center">
				<tr>
					<th><center>Kelas</center></th>
					<th><center>Terklasifikasi Positif</center></th>
					<th><center>Terklasifikasi Negatif</center></th>
				</tr>
				<tr>
					<th><center>Positif</center></th>
					<td><center><?php echo $TP; ?></center></td>
					<td><center><?php echo $FN; ?></center></td>
				</tr>
				<tr>
					<th><center>Negatif</center></th>
					<td><center><?php echo $FP; ?></center></td>
					<td><center><?php echo $TN; ?></center></td>
				</tr>
				
			</table>

			<?php
				echo "
					<h3>Akurasi = ($TP + $TN) / ($TP + $TN + $FP + $FN) <br>
					Akurasi = $hasil_akurasi <br><br>
					Presisi = ($TP) / ($FP + $TP) <br>
					Presisi = $hasil_presisi <br><br>
					Recall = ($TP) / ($FN + $TP) <br>
					Recall = $hasil_recall <br>
					</h3>";

			?>

	</form>