"use client"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Textarea } from "@/components/ui/textarea"

function ChatBoxCards() {
  const dummyData = [
    {
      BloodGroup: "A+",
      Height: "5ft 8in",
      Weight: "70kg",
      Allergies: "None",
      MedicalHistory: "None",
      Medications: "None",
      FamilyHistory: "None",
    },
  ]

  return (
    <div className="container h-screen w-1/2">
      <Card className="w-full h-full">
        <CardContent className="flex flex-col">
          <div className="pb-5">
            <Card className="w-full h-full">
              <CardHeader>
                <CardTitle>Medical History</CardTitle>
                <CardDescription>
                  Deploy your medical history to the world with a single click.
                </CardDescription>
                {dummyData.map((data, index) => (
                  <CardContent key={index}>
                    <div className="flex flex-row justify-between">
                      <div className="flex flex-col">
                        <div className="flex flex-row">
                          <div className="flex flex-col">
                            <p className="font-bold">Blood Group</p>
                            <p className="font-bold">Height</p>
                            <p className="font-bold">Weight</p>
                            <p className="font-bold">Allergies</p>
                            <p className="font-bold">Medical History</p>
                            <p className="font-bold">Medications</p>
                            <p className="font-bold">Family History</p>
                          </div>
                          <div className="flex flex-col">
                            <p>{data.BloodGroup}</p>
                            <p>{data.Height}</p>
                            <p>{data.Weight}</p>
                            <p>{data.Allergies}</p>
                            <p>{data.MedicalHistory}</p>
                            <p>{data.Medications}</p>
                            <p>{data.FamilyHistory}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </CardContent>
                ))}

                <CardContent></CardContent>
              </CardHeader>
              <CardContent className="flex justify-between"></CardContent>
            </Card>
          </div>

          <Card className="w-full h-full">
            <CardHeader>
              <CardTitle className="text-center">Prescription</CardTitle>
            </CardHeader>
            <CardContent className="flex flex-col">
              <div className="grid w-full gap-2">
                <Textarea
                  placeholder="New prescription"
                  className="h-[300px] pb-2"
                />
                <Button>Save</Button>
              </div>
            </CardContent>
          </Card>
        </CardContent>
      </Card>
    </div>
  )
}

export default ChatBoxCards