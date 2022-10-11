const kennyJacketColor = '#81481d';
const kennyFaceColor = '#ffdfb2';
const kennyHatColor = '#fa6800';
const kennyHandsColor = '#804817';
const kennyBodyColor = '#f76a01';

export function draw(canvas) {
    const context = canvas.getContext('2d');
    drawHat(context);
    drawFace(context);
    drawBody(context);
    drawJacket(context);
    drawBoots(context);
}

function drawFace(context) {
    //===================[Голова]=======================
    context.fillStyle = kennyFaceColor;
    context.beginPath();
    context.bezierCurveTo(147, 193, 66, 145, 150, 100);
    context.moveTo(147, 193);
    context.bezierCurveTo(147, 193, 226, 155, 150, 100);
    context.fill();

    //===================[Шапка]========================
    drawEyes(context);

    //===================[Глаза]========================
    drawEyes(context);
}


function drawEyes(context) {
    context.fillStyle = '#fff';
    context.lineWidth = '0.5';
    context.beginPath();
    context.ellipse(127, 143, 20, 24, 0.15 * Math.PI, 1.23 * Math.PI, 0.46 * Math.PI, false);
    context.bezierCurveTo(105, 150, 110, 130, 122, 122);
    context.fill();
    context.beginPath();
    context.ellipse(127, 143, 20, 24, 0.15 * Math.PI, 1.25 * Math.PI, 1.9 * Math.PI, false);
    context.stroke();
    context.beginPath();
    context.ellipse(169, 146, 20, 24, -0.15 * Math.PI, 0.57 * Math.PI, 1.8 * Math.PI, false);
    context.moveTo(176, 169);
    context.bezierCurveTo(176, 169, 191, 155, 177, 126);
    context.fill();
    context.beginPath();
    context.ellipse(169, 146, 20, 24, -0.15 * Math.PI, 1.2 * Math.PI, 1.8 * Math.PI, false);
    context.stroke();
    context.beginPath();
    context.moveTo(177, 129);
    context.strokeStyle = '#fff';
    context.lineWidth = '3';
    context.lineTo(176, 166);
    context.stroke();
    context.fillStyle = '#000';
    context.beginPath();
    context.arc(133, 143, 3, 0, 2 * Math.PI, false);
    context.fill();
    context.arc(165, 144, 3, 0, 2 * Math.PI, false);
    context.fill();
}

function drawHat(context) {
    context.fillStyle = kennyHatColor;
    context.beginPath();
    context.ellipse(150, 148, 85, 86, 0, 0, 2 * Math.PI, false);
    context.fill();

    //===================[Резинка круглая капюшона]========================
    context.lineWidth = '1';
    context.beginPath();
    context.ellipse(149, 153, 61, 53, 0, 0, 2 * Math.PI, false);
    context.stroke();

    //===================[Прокладки капюшона]========================
    context.fillStyle = kennyJacketColor;
    context.strokeStyle = kennyJacketColor;
    context.beginPath();
    context.bezierCurveTo(147, 193, 65, 145, 150, 100);
    context.bezierCurveTo(150, 100, 90, 105, 95, 147);
    context.bezierCurveTo(95, 147, 90, 190, 147, 193);
    context.fill();
    context.stroke();
    context.beginPath();
    context.bezierCurveTo(147, 193, 227, 155, 150, 100);
    context.bezierCurveTo(150, 100, 200, 105, 201, 147);
    context.bezierCurveTo(201, 147, 198, 201, 147, 193);
    context.fill();
    context.stroke();

    //===================[Резинки капюшона]========================
    context.strokeStyle = '#000';
    context.beginPath();
    context.bezierCurveTo(147, 193, 141, 207, 136, 220);
    context.moveTo(147, 193);
    context.bezierCurveTo(147, 193, 146, 210, 150, 225);
    context.stroke();
}

function drawBody(context) {
    context.fillStyle = kennyBodyColor;
    context.beginPath();
    context.bezierCurveTo(93, 210, 76, 229, 77, 256);
    context.bezierCurveTo(77, 256, 83, 266, 100, 270);
    context.lineTo(100, 288);
    context.lineTo(200, 288);
    context.lineTo(200, 273);
    context.bezierCurveTo(200, 273, 210, 273, 220, 253);
    context.bezierCurveTo(220, 253, 225, 235, 207, 211);
    context.bezierCurveTo(207, 211, 150, 260, 93, 210);
    context.fill();
}

function drawJacket(context) {
    context.lineWidth = '1';
    context.strokeStyle = '#000';
    context.beginPath();
    context.moveTo(150, 233);
    context.lineTo(150, 278);
    context.stroke();

    drawArms(context);
}

function drawArms(context) {
    //===================[Левая рука]========================
    context.lineWidth = '0.5';
    context.fillStyle = kennyHandsColor;
    context.beginPath();
    context.moveTo(98, 240);
    context.lineTo(94, 255);
    context.stroke();
    context.lineWidth = '0.2';
    context.beginPath();
    context.arc(81, 259, 12, 0, 2 * Math.PI, false);
    context.fill();
    context.stroke();
    context.beginPath();
    context.arc(90, 255, 5, 0, 2 * Math.PI, false);
    context.fill();
    context.stroke();

    //===================[Правая рука]========================
    context.lineWidth = '0.5';
    context.beginPath();
    context.moveTo(201, 242);
    context.lineTo(201, 260);
    context.stroke();
    context.lineWidth = '0.2';
    context.beginPath();
    context.arc(216, 261, 12, 0, 2 * Math.PI, false);
    context.fill();
    context.stroke();
    context.beginPath();
    context.arc(207, 255, 5, 0, 2 * Math.PI, false);
    context.fill();
    context.stroke();
}


function drawBoots(context) {
    context.fillStyle = '#000';
    context.beginPath();
    context.rect(95, 288, 110, 5);
    context.fill();
}