class Szakdoga {
    constructor(elem, adat) {
        this.elem = elem
        this.adat = adat
        this.id = adat.id
        this.adatokMegjelenitese()
        this.modositGomb = this.elem.find(".modosit")
        this.torlesGomb = this.elem.find(".torles")
        $(this.modositGomb).on("click", () => {
            this.modositasTrigger()
        })
        $(this.torlesGomb).on("click", () => {
            this.torlesTrigger()
        })
    }
    adatokMegjelenitese() {
        this.elem.append("<td class = 'adat'>" + this.adat.szakdoga_nev + "<div class = 'reszpo'>Github link: <br>" + this.adat.githublink + "</div></td>")
        this.elem.append("<td class = 'adat'>" + this.adat.tagokneve + "<div class = 'reszpo'>Webcím: " + this.adat.oldallink + "</div></td>")
        this.elem.append("<td class = 'adat eltun'>" + this.adat.githublink + "</td>")
        this.elem.append("<td class = 'adat eltun'>" + this.adat.oldallink + "</td>")
        this.elem.append("<td><input type = 'button' class = 'modosit' value = 'Módosít'></td>")
        this.elem.append("<td><input type = 'button' class = 'torles' value= 'Törlés'></td>")
    }
    modositasTrigger() {
        const ujesemeny = new CustomEvent("modositas", { detail: this })
        window.dispatchEvent(ujesemeny)
    }
    torlesTrigger() {
        const ujesemeny = new CustomEvent("torles", { detail: this })
        window.dispatchEvent(ujesemeny)
    }
}