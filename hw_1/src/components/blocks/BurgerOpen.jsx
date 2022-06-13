const BurgerOpen = (props) =>{
  return(
    <button className="burgerOpen" onClick={props.onClick}>
        <div className="burger_line_first"></div>
        <div className="burger_line"></div>
        <div className="burger_line"></div>
    </button>
  )
}

export default BurgerOpen