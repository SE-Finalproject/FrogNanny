
function node(genus, species){
    this.genus = genus;
    this.species = species;
}

dataTree  =  FrogData();
function FrogData(){

    var A = new Array();
    var i = 0;
    A[i++] = new node("原指樹蛙屬", ["面天樹蛙", "艾氏樹蛙"]);
    A[i++] = new node("樹蛙屬 ", ["橙腹樹蛙", "台北樹蛙", "翡翠樹蛙", "諸羅樹蛙", "莫氏樹蛙"]);
    A[i++] = new node("泛樹蛙屬", ["布氏樹蛙"]);
    A[i++] = new node("溪樹蛙屬", ["褐樹蛙 ", "日本樹蛙"]);

    var B = new Array();
    var i = 0;
    B[i++] = new node("雨蛙屬", ["中國樹蟾"]);

    var C = new Array();
    var i = 0;
    C[i++] = new node("姬蛙屬", ["黑蒙西氏小雨蛙", "小雨蛙", "巴氏小雨蛙"]);
    C[i++] = new node("小姬蛙屬 ", ["史丹吉氏小雨蛙"]);

    var D = new Array();
    var i = 0;
    D[i++] = new node("鈴蟾屬", ["朝鮮鈴蛙"]);

    var E = new Array();
    var i = 0;
    E[i++] = new node("角花蟾屬", ["蘇利南角蛙", "南美角蛙"]);

    var F = new Array();
    var i = 0;
    F[i++] = new node("蟾蜍屬", ["盤古蟾蜍", "海蟾蜍"]);

    var G = new Array();
    var i = 0;
    G[i++] = new node("側褶蛙屬", ["金線蛙"]);
    G[i++] = new node("大頭蛙屬", ["福建大頭蛙"]);
    G[i++] = new node("拇棘蛙屬", ["腹斑蛙", "豎琴蛙"]);
    G[i++] = new node("水蛙屬", ["台北赤蛙", "拉都希氏蛙", "貢德氏赤蛙"]);
    G[i++] = new node("臭蛙屬", ["斯文豪氏蛙"]);
    G[i++] = new node("蛙屬", ["長腳赤蛙", "梭德氏赤蛙"]);

    var H = new Array();
    var i = 0;
    H[i++] = new node("虎紋蛙屬", ["虎皮蛙"]);
    H[i++] = new node("陸蛙屬", ["海蛙", "澤蛙"]);

    var I = new Array();
    var i = 0;
    I[i++] = new node("曼蛙屬", ["馬達加斯加彩蛙", "金蛙", "綠彩蛙"]);


    //科
    var family = new Array();
    var i = 0;
    family[i++] = new node("樹蛙科", A);
    family[i++] = new node("樹蟾科", B);
    family[i++] = new node("狹口蛙科", C);
    family[i++] = new node("盤舌蟾科", D);
    family[i++] = new node("細趾蟾科", E);
    family[i++] = new node("蟾蜍科", F);
    family[i++] = new node("赤蛙科", G);
    family[i++] = new node("叉舌蛙科", H);
    family[i++] = new node("彩蛙科", I);

    return(family);
}

// 第二個欄位被更動的動作
function onChangeGenus(){
    form = document.theForm;
    index1 = form.family.selectedIndex;
    index2 = form.genus.selectedIndex;
    for (i = 0; i < dataTree[index1].species[index2].species.length; i++)
        form.species.options[i] = new Option(dataTree[index1].species[index2].species[i], dataTree[index1].species[index2].species[i]);
    form.species.options.length = dataTree[index1].species[index2].species.length;
}

// 第一個欄位被更動的動作
function onChangeFamily() {
    form = document.theForm;
    index1 = form.family.selectedIndex;
    for (i = 0;i < dataTree[index1].species.length; i++) {
        form.genus.options[i] = new Option(dataTree[index1].species[i].genus, dataTree[index1].species[i].genus);
    }
    form.genus.options.length = dataTree[index1].species.length;
    // Clear column 3
    form.species.options.length = 0;
    onChangeGenus();
}
function load() {
    form = document.theForm;
    for (i = 0;i < dataTree.length; i++) {
        form.family.options[i] = new Option(dataTree[i].genus, dataTree[i].genus);
    }
    form.family.selectedIndex = 0;
    onChangeFamily();
} 

