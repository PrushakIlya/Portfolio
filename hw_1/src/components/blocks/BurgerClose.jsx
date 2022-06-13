const BurgerClose = (props) =>{
  return(
    <button className="burgerClose" onClick={props.onClick}>
        <div className="burger_line_one burger_line"></div>
        <div className="burger_line_two burger_line"></div>
    </button>
  )
}

export default BurgerClose