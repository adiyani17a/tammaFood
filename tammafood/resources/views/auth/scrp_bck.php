if($mem_comp > 1){
                    if(count($user->getActiveComp($user->m_id))){
                        Session::set('mem_comp', $user->getActiveComp($user->m_id)->mc_comp);
                        $response = [
                            'status'    => 'sukses',
                            'content'   => 'authenticate'
                        ];
                    }else{
                        $response = [
                            'status'    => 'sukses',
                            'content'   => 'gate 2'
                        ];
                    }
                 }
                 else if($mem_comp == 0){
                    Session::set('mem_comp', 'null');
                    $response = [
                        'status'    => 'sukses',
                        'content'   => 'authenticate'
                    ];
                 }else{
                    Session::set('mem_comp', $user->company->first()->c_id);
                    $data = d_mem_comp::where('mc_mem', '=', Auth::user()->m_id)->where('mc_comp', '=', $user->company->first()->c_id);

                    if($data->update([ 'mc_active' => 1 ])){
                        $response = [
                            'status'    => 'sukses',
                            'content'   => 'authenticate'
                        ];
                    }
                 }