import React from 'react'

const NavLinks = () => {
    const links = [
        {name:'Books',submenu:true,sublinks:[
            {
                Head:'Genre',
                sublink:[
                    {name:'Romance',link:'/'},
                    {name:'Thrillers',link:'/'},
                    {name:'Kids',link:'/'},
                    {name:'Fantacy',link:'/'},
                    {name:'Science Fiction',link:'/'},
                    {name:'Art',link:'/'},
                    {name:'Biographies',link:'/'},
                    {name:'Recipes',link:'/'},
                    {name:'History',link:'/'},
                    {name:'Detective',link:'/'},
                    {name:'Science',link:'/'},
                ]
            }
        ]}];
  return (
    <>
      {
        links.map(link=>(
           <div>
             <div className="px-3 text-left md:cursor-pointer group">
                <h1 className="py-7">{link.name}</h1>
                {link.submenu && (
                <div>
                    <div className='absolute top-20 hidden group-hover:block hover:block'>
                        <div className='py-3'>
                            <div 
                            className='w-4 h-4 left-3 absolute mt-1 bg-blue-300 rotate-45'>
                             </div>
                        </div>
                        <div className='a bg-blue-300 p-5'>
                            {
                             link.sublinks.map((mysublinks)=>(
                                <div>
                                    <h1 className="text-lg font-semibold">{mysublinks.Head}</h1>
                                    {mysublinks.sublink.map(slink=>(
                                        <li className='text-sm text-gray-600 my-2.5'>
                                           <slink to={slink.link} 
                                           className="hover:text-white">{slink.name}</slink>
                                        </li>
                                    ))}
                                </div>
                             ))
                            }
                        </div>
                     </div>
                </div>
                )}
             </div>
           </div>
        ))}
    </>
  )
};

export default NavLinks
