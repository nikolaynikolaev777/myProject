function muOnlineCalculatorDarkKnight() {
  let statPoint = prompt(`What is your stats: 1 - 131 068`);

    let str, agi, vit, ene;

    if(statPoint <= 2800) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 10000) {
      str = statPoint * 0.50;
      agi = statPoint * 0.25;
      vit = statPoint * 0.20;
      ene = statPoint * 0.5;
    } else if (statPoint <= 15000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.20;
      ene = statPoint * 0.5;
    } else if (statPoint <= 25000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 35000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 45000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 55000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 80000) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else if (statPoint <= 131068) {
      str = statPoint * 0.45;
      agi = statPoint * 0.25;
      vit = statPoint * 0.10;
      ene = statPoint * 0.20;
    } else {
      document.getElementById("msg").innerHTML =(`Please write the correct value between: 1 to 131 131068`);
    }

    document.getElementById("msgStr").innerHTML =(`Strnght: ${Math.trunc(str)}`);
    document.getElementById("msgAgi").innerHTML =(`Agility ${Math.trunc(agi)}`);
    document.getElementById("msgVit").innerHTML =(`Vitality ${Math.trunc(vit)}`);
    document.getElementById("msgEne").innerHTML =(`Energy ${Math.trunc(ene)}`);

}