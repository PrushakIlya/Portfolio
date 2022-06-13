import BurgerOpen from "./BurgerOpen"
import UserSvg from './../../img/user_svg'

const BurgerOpenBlock = (props) =>{
  return(
    <div className='burgerOpen_block'>
          <BurgerOpen onClick={props.onClick}/>
          <div className='user'>
            <UserSvg />
          </div>
          <p className='username'>Username</p>
    </div>
  )
}

export default BurgerOpenBlock