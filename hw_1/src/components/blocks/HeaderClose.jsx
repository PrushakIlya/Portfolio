import BurgerClose from './BurgerClose'

const BurgerCloseBlock = (props) =>{
  return(
    <div className='burgerClose_block'>
        <BurgerClose onClick={props.onClick}/>
        <nav>
          <ul>
            <div>
              <li><a href="#">All posts</a></li>
              <ul>
                <li><a href="#">My posts</a></li>
                <li className='burgerClose_addPosts'><a href="#">add posts</a></li>
              </ul>
            </div>
            <li><a href="#">Log out</a></li>
          </ul>
        </nav>
      </div>
  )
}

export default BurgerCloseBlock