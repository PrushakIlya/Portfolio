import React, {useContext, useState} from 'react'
import BurgerOpenBlock from './blocks/HeaderOpen'
import BurgerCloseBlock from './blocks/HeaderClose'

const Header = () =>{
  let [toggle,setToggle] = useState(true)
  return(
    <header style={toggle?{backgroundColor: 'inherit'}:{backgroundColor: '#2b95e6'}}>
      <div className="header wrapper">
      {toggle?<BurgerOpenBlock onClick={()=>setToggle(toggle=false)}/>:<BurgerCloseBlock onClick={()=>setToggle(toggle=true)}/>}
      </div>
    </header>
  )
}

export default Header