const router = require ("express").Router()

router.get('/', (req, res) => {
    res.render("page/index")
});

router.get('/nosotros', (req, res) => {
    res.render("page/Nosotros")
});
 
module.exports = router